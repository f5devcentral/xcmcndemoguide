resource "tls_private_key" "key" {
  algorithm = "RSA"
}

resource "volterra_cloud_credentials" "azure_cred" {
  name      = var.environment
  namespace = "system"
  azure_client_secret {
    client_id = var.azure_service_principal_appid
    client_secret {
        clear_secret_info {
            url = "string:///${base64encode(var.azure_service_principal_password)}"
        }
    }
    subscription_id = var.azure_subscription_id
    tenant_id       = var.azure_subscription_tenant_id
  }
}

resource "volterra_azure_vnet_site" "azure_vnet_site" {
  name      = var.environment
  namespace = "system"

  default_blocked_services = true

  azure_cred {
    name      = volterra_cloud_credentials.azure_cred.name
    namespace = "system"
  }
  logs_streaming_disabled = true
  azure_region   = azurerm_resource_group.rg.location
  resource_group = "${azurerm_resource_group.rg.name}-xc"

  disk_size = 80
  machine_type = var.azure_xc_machine_type

  ingress_egress_gw {
    azure_certified_hw = "azure-byol-multi-nic-voltmesh"
    az_nodes {
      azure_az  = "1"
      disk_size = "80"
      inside_subnet {
        subnet {
          subnet_name         = azurerm_subnet.private_subnet.name
          vnet_resource_group = true
        }
      }
      outside_subnet {
        subnet {
          subnet_name         = azurerm_subnet.public_subnet.name
          vnet_resource_group = true
        }
      }
    }
    no_global_network        = true
    no_inside_static_routes  = true
    no_network_policy        = true
    no_outside_static_routes = true
  }

  vnet {
    existing_vnet {
      resource_group = azurerm_resource_group.rg.name
      vnet_name      = azurerm_virtual_network.vnet.name
    }
  }

  lifecycle {
    ignore_changes = [labels]
  }

  ssh_key = [tls_private_key.key.public_key_openssh]
}

resource "volterra_cloud_site_labels" "labels" {
  name             = volterra_azure_vnet_site.azure_vnet_site.name
  site_type        = "azure_vnet_site"
  labels           = {}
  ignore_on_delete = true
}

resource "volterra_tf_params_action" "action_apply" {
  site_name = volterra_azure_vnet_site.azure_vnet_site.name
  site_kind = "azure_vnet_site"
  action = "apply"
  wait_for_action = true

  depends_on = [
    volterra_azure_vnet_site.azure_vnet_site
  ]
}

data "azurerm_network_interface" "xc_private_nic" {
  name                = "master-0-sli"
  resource_group_name = "${azurerm_resource_group.rg.name}-xc"
  depends_on = [
     volterra_tf_params_action.action_apply
  ]
}

output "xc_node_private_ip" {
  value = data.azurerm_network_interface.xc_private_nic.private_ip_address
}

resource "azurerm_route_table" "xc_routes" {
  name                          = "xc-route-table"
  location                      = azurerm_resource_group.rg.location
  resource_group_name           = "${azurerm_resource_group.rg.name}-xc"
  disable_bgp_route_propagation = false

  route {
    name                   = "remote-net"
    address_prefix         = var.xc_remote_cidr
    next_hop_type          = "VirtualAppliance"
    next_hop_in_ip_address = data.azurerm_network_interface.xc_private_nic.private_ip_address
  }

  depends_on = [
    volterra_tf_params_action.action_apply
  ]
}

output "xc_private_key" {
  value     = tls_private_key.key.private_key_pem
  sensitive = true
}

output "xc_public_key" {
  value = tls_private_key.key.public_key_openssh
}

resource "azurerm_subnet_route_table_association" "xc_routes_association" {
  subnet_id      = azurerm_subnet.private_subnet.id
  route_table_id = azurerm_route_table.xc_routes.id
}