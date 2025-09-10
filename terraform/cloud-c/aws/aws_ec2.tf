resource "random_string" "random_suffix" {
  length  = 4
  special = false
  upper   = false
  numeric  = true
  min_lower = 1
  min_numeric = 1
}

locals {
  environment = "${var.environment}-${random_string.random_suffix.result}"
}

data "aws_ami" "ubuntu" {
  most_recent = true
  owners      = ["099720109477"] # Canonical

  filter {
    name   = "name"
    values = ["ubuntu/images/hvm-ssd-gp3/ubuntu-noble-24.04-amd64-server-*"]
  }

  filter {
    name   = "virtualization-type"
    values = ["hvm"]
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
    Name        = "${local.environment}-arcadia-sg"
    Environment = local.environment
  }
}

resource "aws_instance" "arcadia_transaction" {
  ami                    = data.aws_ami.ubuntu.id
  instance_type          = "t3.small"
  subnet_id              = element(aws_subnet.private_subnet.*.id, 0)
  private_ip             = var.demo_vm_ip
  vpc_security_group_ids = [aws_security_group.allow_http.id, aws_security_group.default.id]

  tags = {
    Name        = "${local.environment}-arcadia-transaction"
    Environment = local.environment
  }

  depends_on = [
    volterra_tf_params_action.action_apply
  ]

  user_data = <<-EOL
    #!/bin/bash -xe

    curl -fsSL https://get.docker.com -o get-docker.sh
    sh get-docker.sh

    git clone https://github.com/f5devcentral/xcmcndemoguide.git
    cd xcmcndemoguide/app/cloud-c
    docker compose up -d
  EOL
}