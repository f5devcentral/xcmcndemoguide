terraform {
        required_version = ">= 0.12.9, != 0.13.0"
    
        required_providers {
        volterra = {
            source = "volterraedge/volterra"
            version = ">=0.0.6"
        }
        aws = {
            source  = "hashicorp/aws"
            version = "~> 4.16"
        }
    }
}

provider "volterra" {
  api_p12_file = var.api_p12_file
  api_cert     = var.api_p12_file != "" ? "" : var.api_cert
  api_key      = var.api_p12_file != "" ? "" : var.api_key
  api_ca_cert  = var.api_ca_cert
  url          = var.api_url
}

provider "aws" {
  region     = var.aws_region
  access_key = var.aws_access_key
  secret_key = var.aws_secret_key
}