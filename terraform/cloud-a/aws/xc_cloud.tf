resource "volterra_cloud_credentials" "aws_cred" {
  name = "${var.owner}-aws-techxchange"
  namespace = "system"
  aws_secret_key {
	  access_key = var.aws_access_key
	  secret_key {
	  	clear_secret_info {
	  		url = "string:///${base64encode(var.aws_secret_key)}"
	  	}
	  }
  }
}
resource "volterra_aws_vpc_site" "aws_vpc_site" {
  name       = "${var.owner}-${var.environment}-techxchange"
  namespace  = "system"
  aws_region = var.aws_region
  aws_cred {
	  name      = volterra_cloud_credentials.aws_cred.name
	  namespace = "system"
  }
  vpc {
	  vpc_id = aws_vpc.vpc.id
  }
  disk_size     = 80
  instance_type = var.aws_xc_instance_type

  ingress_egress_gw {
	  aws_certified_hw = "aws-byol-multi-nic-voltmesh"
	  az_nodes {
	  	aws_az_name = var.aws_availability_zones[0]
	  	disk_size   = 100
	  	inside_subnet {
			existing_subnet_id = element(aws_subnet.private_subnet.*.id, 0)
	  	}
	  	outside_subnet {
			existing_subnet_id = element(aws_subnet.public_subnet.*.id, 0)
	  	}
	  	workload_subnet {
			existing_subnet_id = element(aws_subnet.workload_subnet.*.id, 0)
	  	}
	  }
	  no_global_network        = true
	  no_inside_static_routes  = true
	  no_network_policy        = true
	  no_outside_static_routes = true
  }

  depends_on = [
    aws_vpc.vpc
  ]

  lifecycle {
    ignore_changes = [labels]
  }
}

resource "volterra_cloud_site_labels" "labels" {
  name             = volterra_aws_vpc_site.aws_vpc_site.name
  site_type        = "aws_vpc_site"
  labels           = {}
  ignore_on_delete = true
}

resource "volterra_tf_params_action" "action_apply" {
	site_name       = volterra_aws_vpc_site.aws_vpc_site.name
	site_kind       = "aws_vpc_site"
	action          = "apply"
	wait_for_action = true

	depends_on = [
    	volterra_aws_vpc_site.aws_vpc_site
    ]
}

data "aws_instance" "xc_node" {
  instance_tags = {
    "ves-io-site-name" = "${var.owner}-${var.environment}-techxchange"
  }

  filter {
	name   = "subnet-id"
	values = [element(aws_subnet.private_subnet.*.id, 0), element(aws_subnet.public_subnet.*.id, 0), element(aws_subnet.workload_subnet.*.id, 0)]
  }

  depends_on = [
    volterra_tf_params_action.action_apply
  ]
}

data "aws_network_interface" "xc_private_nic" {
  filter {
	name   = "attachment.instance-id"
	values = [data.aws_instance.xc_node.id]
  }

  filter {
	name   = "subnet-id"
	values = [element(aws_subnet.private_subnet.*.id, 0)]
  }

  depends_on = [
    volterra_tf_params_action.action_apply
  ]
}

output "xc_node_private_ip" {
  value = data.aws_network_interface.xc_private_nic.private_ip
}
output "xc_node_private_nic_id" {
  value = data.aws_network_interface.xc_private_nic.id
}

resource "aws_route" "remote_network" {
  route_table_id              = aws_route_table.public.id
  destination_cidr_block      = var.xc_remote_cidr
  network_interface_id        = data.aws_network_interface.xc_private_nic.id
}