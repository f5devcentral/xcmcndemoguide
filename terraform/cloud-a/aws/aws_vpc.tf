resource "aws_vpc" "vpc" {
  cidr_block           = var.aws_vpc_cidr
  enable_dns_hostnames = true
  enable_dns_support   = true

  tags = {
    Name        = "${var.environment}-vpc"
    Environment = var.environment
  }
}

resource "aws_internet_gateway" "ig" {
  vpc_id = aws_vpc.vpc.id
  tags = {
    Name        = "${var.environment}-igw"
    Environment = var.environment
  }
}

resource "aws_subnet" "public_subnet" {
  vpc_id                  = aws_vpc.vpc.id
  count                   = length(var.aws_public_subnets_cidr)
  cidr_block              = element(var.aws_public_subnets_cidr, count.index)
  availability_zone       = element(var.aws_availability_zones, count.index)
  map_public_ip_on_launch = true

  tags = {
    Name        = "${var.environment}-${element(var.aws_availability_zones, count.index)}-public-subnet"
    Environment = var.environment
  }
}

resource "aws_subnet" "private_subnet" {
  vpc_id                  = aws_vpc.vpc.id
  count                   = length(var.aws_private_subnets_cidr)
  cidr_block              = element(var.aws_private_subnets_cidr, count.index)
  availability_zone       = element(var.aws_availability_zones, count.index)
  map_public_ip_on_launch = true

  tags = {
    Name        = "${var.environment}-${element(var.aws_availability_zones, count.index)}-private-subnet"
    Environment = var.environment
  }
}

resource "aws_subnet" "workload_subnet" {
  vpc_id                  = aws_vpc.vpc.id
  count                   = length(var.aws_workload_subnets_cidr)
  cidr_block              = element(var.aws_workload_subnets_cidr, count.index)
  availability_zone       = element(var.aws_availability_zones, count.index)
  map_public_ip_on_launch = false

  tags = {
    Name        = "${var.environment}-${element(var.aws_availability_zones, count.index)}-workload-subnet"
    Environment = var.environment
  }
}

resource "aws_route_table" "public" {
  vpc_id = aws_vpc.vpc.id

  tags = {
    Name        = "${var.environment}-public-route-table"
    Environment = var.environment
  }
}

resource "aws_route" "public_internet_gateway" {
  route_table_id         = aws_route_table.public.id
  destination_cidr_block = "0.0.0.0/0"
  gateway_id             = aws_internet_gateway.ig.id
}

resource "aws_route_table_association" "public_routes" {
  count          = length(var.aws_public_subnets_cidr)
  subnet_id      = element(aws_subnet.public_subnet.*.id, count.index)
  route_table_id = aws_route_table.public.id
}

resource "aws_route_table_association" "private_routes" {
  count          = length(var.aws_private_subnets_cidr)
  subnet_id      = element(aws_subnet.private_subnet.*.id, count.index)
  route_table_id = aws_route_table.public.id
}

resource "aws_security_group" "default" {
  name        = "${var.environment}-default-sg"
  description = "Default SG to alllow traffic from the VPC"
  vpc_id      = aws_vpc.vpc.id
  depends_on = [
    aws_vpc.vpc
  ]

  ingress {
    from_port = "0"
    to_port   = "0"
    protocol  = "-1"
    self      = true
  }

  egress {
    from_port = "0"
    to_port   = "0"
    protocol  = "-1"
    self      = true
  }

  tags = {
    Environment = var.environment
  }
}