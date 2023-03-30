#!/bin/bash
terraform -chdir=terraform/cloud-a/aws init
terraform -chdir=terraform/cloud-a/aws apply -var-file=../../../admin.auto.tfvars
