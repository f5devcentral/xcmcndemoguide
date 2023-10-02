resource "azurerm_resource_group" "rg" {
  name     = local.environment
  location = var.azure_rg_location
}

resource "azurerm_virtual_network" "vnet" {
  name                = "${local.environment}-network"
  address_space       = var.azure_vnet_cidr
  location            = azurerm_resource_group.rg.location
  resource_group_name = azurerm_resource_group.rg.name
}

resource "azurerm_subnet" "private_subnet" {
  name                 = "private_subnet"
  resource_group_name  = azurerm_resource_group.rg.name
  virtual_network_name = azurerm_virtual_network.vnet.name
  address_prefixes     = var.azure_private_subnets_cidr
}

resource "azurerm_subnet" "public_subnet" {
  name                 = "public_subnet"
  resource_group_name  = azurerm_resource_group.rg.name
  virtual_network_name = azurerm_virtual_network.vnet.name
  address_prefixes     = var.azure_public_subnets_cidr
}
