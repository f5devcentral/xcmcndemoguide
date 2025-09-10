# Terraform Infrastructure Deployment

This repository contains Terraform configurations for deploying multi-cloud infrastructure across AWS and Azure platforms using F5 Distributed Cloud Services.

## Overview

The project is organized into three cloud environments:

- **cloud-a**: First cloud environment
- **cloud-b**: Second cloud environment
- **cloud-c**: Third cloud environment

Each cloud environment supports both AWS and Azure deployments.

## Getting Started

Choose your cloud platform and follow the corresponding setup guide:

### AWS Deployment

For AWS infrastructure deployment, please refer to:

**[AWS Setup Guide](README_AWS.md)**

This guide covers:
- AWS CLI configuration
- IAM roles and permissions setup
- Service-specific configurations
- Terraform deployment steps

### Azure Deployment

For Azure infrastructure deployment, please refer to:

**[Azure Setup Guide](README_Azure.md)**

This guide covers:
- Azure CLI configuration
- Service Principal creation
- Resource group setup
- Terraform deployment steps

## Prerequisites

Before starting with either platform, ensure you have:

- [Terraform](https://www.terraform.io/downloads.html) installed
- F5 Distributed Cloud Services account and API credentials

## Quick Start

1. **Clone the repository**
   ```bash
   git clone <repository-url>
   cd xcmcndemoguide/terraform
   ```

2. **Choose your deployment path**
   - For AWS: Follow [README_AWS.md](README_AWS.md)
   - For Azure: Follow [README_Azure.md](README_Azure.md)

3. **Select your cloud environment**
   ```bash
   cd cloud-a/aws    # For AWS deployment in cloud-a
   # or
   cd cloud-a/azure  # For Azure deployment in cloud-a
   ```

4. **Initialize and deploy**
   ```bash
   terraform init
   terraform plan
   terraform apply
   ```
