terraform {
  required_version = ">= 0.12.9, != 0.13.0"
  required_providers {
    volterra = {
      source  = "volterraedge/volterra"
      version = "=0.11.44"
    }
    azurerm = {
      source  = "hashicorp/azurerm"
      version = "=4.43.0"
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

provider "azurerm" {
  features {}

  subscription_id   = var.azure_subscription_id
  tenant_id         = var.azure_subscription_tenant_id
  client_id         = var.azure_service_principal_appid
  client_secret     = var.azure_service_principal_password
}
