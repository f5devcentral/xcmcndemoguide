output "xc_node_private_ip" {
  value       = data.aws_network_interface.xc_private_nic.private_ip
  description = "XC CE Node Private IP"
}

output "site_name" {
  value       = local.environment
  description = "The name of the site"
}