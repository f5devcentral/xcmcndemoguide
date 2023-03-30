#!/bin/bash
terraform -chdir=terraform/cloud-b/aws init
terraform -chdir=terraform/cloud-b/aws apply -var-file=../../../admin.auto.tfvars
