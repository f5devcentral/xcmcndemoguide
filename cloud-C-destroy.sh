#!/bin/bash
terraform -chdir=terraform/cloud-c/aws destroy -var-file=../admin.auto.tfvars
