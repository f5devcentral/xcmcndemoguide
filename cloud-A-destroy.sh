#!/bin/bash
terraform -chdir=terraform/cloud-a/aws destroy -var-file=../admin.auto.tfvars
