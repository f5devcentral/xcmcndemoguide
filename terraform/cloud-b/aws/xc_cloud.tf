resource "volterra_cloud_credentials" "aws_cred" {
  name = var.environment
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
  name = var.environment
  namespace = "system"
  aws_region = var.aws_region
  aws_cred {
	  name = volterra_cloud_credentials.aws_cred.name
	  namespace = "system"
  }
  vpc {
	  vpc_id = aws_vpc.vpc.id
  }
  disk_size = 80
  instance_type = var.aws_xc_instance_type

  ingress_egress_gw {
	  aws_certified_hw = "aws-byol-multi-nic-voltmesh"
	  az_nodes {
	  	aws_az_name = var.aws_availability_zones[0]
	  	disk_size = 100
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
	  no_global_network = true
	  no_inside_static_routes = true
	  no_network_policy = true
	  no_outside_static_routes = true
  }

  depends_on = [
    aws_vpc.vpc
  ]
}
resource "volterra_tf_params_action" "action_apply" {
	site_name = volterra_aws_vpc_site.aws_vpc_site.name
	site_kind = "aws_vpc_site"
	action = "apply"
	wait_for_action = true

	depends_on = [
    	volterra_aws_vpc_site.aws_vpc_site
    ]
}
