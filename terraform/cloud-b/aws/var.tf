variable "environment" {
  default     = "cloud-b"
  description = "Environment Name"
}

variable "api_url" {
  type    = string
  default = "https://console.ves.volterra.io/api"
}

variable "api_p12_file" {
  default = "./api-cert.p12"
}

variable "aws_access_key" {
  type    = string
  default = ""
}

variable "aws_secret_key" {
  type    = string
  default = ""
}

variable "aws_region" {
  description = "Region in which environment will be launched"
  type        = string
  default     = "us-west-1"
}

variable "aws_xc_instance_type" {
  type    = string
  default = "t3.xlarge"
}

variable "aws_vpc_cidr" {
  type        = string
  default     = "10.0.0.0/16"
  description = "CIDR block of the vpc"
}

variable "aws_public_subnets_cidr" {
  type        = list(string)
  default     = ["10.0.10.0/24"]
  description = "CIDR block for Public Subnet"
}

variable "aws_private_subnets_cidr" {
  type        = list(string)
  default     = ["10.0.20.0/24"]
  description = "CIDR block for Private Subnet"
}

variable "aws_workload_subnets_cidr" {
  type        = list(string)
  default     = ["10.0.30.0/24"]
  description = "CIDR block for Workload Subnet"
}

variable "aws_availability_zones" {
  type        = list(string)
  default     = ["us-west-1a"]
  description = "AZ in which all the resources will be deployed"
}

variable "demo_vm_ip" {
  type        = string
  default     = "10.0.20.100"
  description = "Ip Address for demo-vm"
}