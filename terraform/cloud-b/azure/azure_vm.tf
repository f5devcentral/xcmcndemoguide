resource "azurerm_network_security_group" "sg" {
  name                = "${local.environment}-sg"
  location            = azurerm_resource_group.rg.location
  resource_group_name = azurerm_resource_group.rg.name
}

resource "azurerm_network_security_rule" "open_http" {
  name                        = "allow_http_inbound"
  priority                    = 1001
  direction                   = "Inbound"
  access                      = "Allow"
  protocol                    = "Tcp"
  source_port_range           = "*"
  destination_port_range      = "80"
  source_address_prefix       = "*"
  destination_address_prefix  = "*"
  resource_group_name         = azurerm_resource_group.rg.name
  network_security_group_name = azurerm_network_security_group.sg.name
}

resource "azurerm_network_interface_security_group_association" "nic_sga" {
  network_interface_id      = azurerm_network_interface.nic.id
  network_security_group_id = azurerm_network_security_group.sg.id
}

resource "azurerm_public_ip" "public_ip" {
  name                = "${local.environment}-public-ip"
  resource_group_name = azurerm_resource_group.rg.name
  location            = azurerm_resource_group.rg.location
  allocation_method   = "Static"
}

resource "azurerm_network_interface" "nic" {
  name                = "${local.environment}-nic"
  location            = azurerm_resource_group.rg.location
  resource_group_name = azurerm_resource_group.rg.name

  ip_configuration {
    name                          = "configuration"
    subnet_id                     = azurerm_subnet.private_subnet.id
    private_ip_address_allocation = "Static"
    private_ip_address            = var.demo_vm_ip
    public_ip_address_id          = azurerm_public_ip.public_ip.id
  }
}

resource "random_password" "password" {
  length           = 16
  special          = true
  upper   = true
  numeric  = true
  min_lower = 1
  min_upper = 1
  min_numeric = 1
  min_special = 1
  override_special = "!#$%&*()-_=+[]{}<>:?"
}

resource "azurerm_virtual_machine" "vm" {
  name                  = "${local.environment}-vm"
  location              = azurerm_resource_group.rg.location
  resource_group_name   = azurerm_resource_group.rg.name
  network_interface_ids = [azurerm_network_interface.nic.id]
  vm_size               = var.azure_vm_machine_type

  delete_os_disk_on_termination = true

  storage_image_reference {
    publisher = "Canonical"
    offer     = "ubuntu-24_04-lts"
    sku       = "server"
    version   = "latest"
  }

  storage_os_disk {
    name              = "${local.environment}-osdisk"
    caching           = "ReadWrite"
    create_option     = "FromImage"
    managed_disk_type = "Standard_LRS"
  }

  os_profile {
    computer_name  = "${local.environment}-arcadia-core"
    admin_username = "ubuntu"
    admin_password = random_password.password.result

    custom_data = <<-EOL
      #!/bin/bash -xe

      curl -fsSL https://get.docker.com -o get-docker.sh
      sh get-docker.sh

      git clone https://github.com/yoctoalex/arcadia-finance-mcn.git
      cd arcadia-finance-mcn/cloud-b
      docker compose up -d
    EOL
  }

  os_profile_linux_config {
    disable_password_authentication = false
  }
}