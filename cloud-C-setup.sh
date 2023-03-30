#!/bin/bash
terraform -chdir=terraform/cloud-c/aws init
terraform -chdir=terraform/cloud-c/aws apply -var-file=../../../admin.auto.tfvars
