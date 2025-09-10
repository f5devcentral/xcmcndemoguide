output "xc_node_private_ip" {
  value = data.azurerm_network_interface.xc_private_nic.private_ip_address
  description = "XC CE Node Private IP"
}

output "site_name" {
  value       = local.environment
  description = "The name of the site"
}