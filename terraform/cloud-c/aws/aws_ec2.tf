data "aws_ami" "ubuntu" {
  most_recent = true

  filter {
    name   = "name"
    values = ["ubuntu/images/hvm-ssd/ubuntu-focal-20.04-amd64-server-*"]
  }

  filter {
    name   = "virtualization-type"
    values = ["hvm"]
  }

  owners = ["099720109477"] # Canonical
}

resource "aws_network_interface" "private_nic" {
  subnet_id   = element(aws_subnet.private_subnet.*.id, 0)
  private_ips = [var.demo_vm_ip]
  security_groups = [aws_security_group.allow_http.id, aws_security_group.default.id]

  tags = {
    Name        = "${var.environment}-private-mic"
    Environment = var.environment
  }
}

resource "aws_security_group" "allow_http" {
  name        = "allow_http"
  description = "Allow HTTP inbound traffic"
  vpc_id      = aws_vpc.vpc.id

  ingress {
    description      = "Allow SSH"
    from_port        = 22
    to_port          = 22
    protocol         = "tcp"
    cidr_blocks      = ["0.0.0.0/0"]
    ipv6_cidr_blocks = ["::/0"]
  }

  ingress {
    description      = "Allow all HTTP"
    from_port        = 80
    to_port          = 80
    protocol         = "tcp"
    cidr_blocks      = ["0.0.0.0/0"]
    ipv6_cidr_blocks = ["::/0"]
  }

  egress {
    from_port        = 0
    to_port          = 0
    protocol         = "-1"
    cidr_blocks      = ["0.0.0.0/0"]
    ipv6_cidr_blocks = ["::/0"]
  }

  tags = {
    Name        = "${var.environment}-arcadia-sg"
    Environment = var.environment
  }
}

resource "aws_instance" "arcadia_transaction" {
  ami           = data.aws_ami.ubuntu.id
  instance_type = "t3.small"

  network_interface {
    network_interface_id = aws_network_interface.private_nic.id
    device_index         = 0
  }

  tags = {
    Name        = "${var.environment}-arcadia-transaction"
    Environment = var.environment
  }

  depends_on = [
    volterra_tf_params_action.action_apply
  ]

  user_data = <<-EOL
    #!/bin/bash -xe

    curl -fsSL https://get.docker.com -o get-docker.sh
    sh get-docker.sh

    git clone https://github.com/yoctoalex/arcadia-finance-mcn.git
    cd arcadia-finance-mcn/cloud-c
    docker compose up -d
  EOL
}