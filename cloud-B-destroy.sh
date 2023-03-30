#!/bin/bash
terraform -chdir=terraform/cloud-b/aws destroy -var-file=../admin.auto.tfvars
