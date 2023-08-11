variable "environment" {
  default		= "cloud-c"
  description = "Environment Name"
}

variable "api_cert" {
  type = string
  default = ""
}

variable "api_key" {
  type = string
  default = ""
}
variable "api_ca_cert" {
  default = ""
}

variable "api_url" {
  type = string
  default = "https://console.ves.volterra.io/api"
}

variable "api_p12_file" {
  default = "./api-cert.p12"
}

variable "azure_subscription_id" {
  type = string
  default = ""
}

variable "azure_subscription_tenant_id" {
  type = string
  default = ""
}

variable "azure_service_principal_appid" {
  type = string
  default = ""
}

variable "azure_service_principal_password" {
  type = string
  default = ""
}

variable "azure_vnet_cidr" {
  type        = list(string)
  default 	= ["192.168.0.0/16"]
  description = "CIDR block for VNET"
}

variable "azure_public_subnets_cidr" {
  type        = list(string)
  default 	= ["192.168.50.0/24"]
  description = "CIDR block for Public Subnet"
}

variable "azure_private_subnets_cidr" {
  type        = list(string)
  default 	= ["192.168.100.0/24"]
  description = "CIDR block for Private Subnet"
}

variable "azure_rg_location" {
  type = string
  default = "westus3"
}

variable "azure_vm_machine_type" {
  type = string
  default = "Standard_DS1_v2"
}

variable "azure_xc_machine_type" {
  type = string
  default = "Standard_DS3_v2"
}

variable "xc_remote_cidr" {
  type 		= string
  default 	= "10.0.20.0/24"
  description = "Remote CIDR"
}

variable "demo_vm_ip" {
  type 		= string
  default 	= "192.168.100.100"
  description = "Ip Address for demo-vm"
}