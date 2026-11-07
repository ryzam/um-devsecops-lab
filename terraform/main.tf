# SENGAJA tidak selamat: hanya untuk scan IaC. JANGAN jalankan `terraform apply`.
terraform {
  required_providers {
    aws = {
      source  = "hashicorp/aws"
      version = "~> 5.0"
    }
  }
}

provider "aws" {
  region = "ap-southeast-1"
}

resource "aws_s3_bucket" "muat_naik" {
  bucket = "kedai-bengkel-muat-naik"
}

resource "aws_s3_bucket_acl" "muat_naik" {
  bucket = aws_s3_bucket.muat_naik.id
  acl    = "public-read"
}

resource "aws_security_group" "web" {
  name        = "kedai-web"
  description = "Kumpulan keselamatan web"

  ingress {
    description = "SSH terbuka kepada dunia"
    from_port   = 22
    to_port     = 22
    protocol    = "tcp"
    cidr_blocks = ["0.0.0.0/0"]
  }

  ingress {
    description = "HTTP"
    from_port   = 80
    to_port     = 80
    protocol    = "tcp"
    cidr_blocks = ["0.0.0.0/0"]
  }

  egress {
    from_port   = 0
    to_port     = 0
    protocol    = "-1"
    cidr_blocks = ["0.0.0.0/0"]
  }
}

resource "aws_db_instance" "utama" {
  identifier             = "kedai-db"
  engine                 = "mysql"
  instance_class         = "db.t3.micro"
  allocated_storage      = 20
  username               = "kedai_app"
  password               = "CKVYZyQ9k3EHorDeQDeIOVE7"
  publicly_accessible    = true
  storage_encrypted      = false
  skip_final_snapshot    = true
  vpc_security_group_ids = [aws_security_group.web.id]
}
