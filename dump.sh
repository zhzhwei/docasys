#!/usr/bin/env sh

backup_dir=./mysql/init
prev_backup=$(ls ${backup_dir}/*.sql | head -1)

# save previous backup
mv ${prev_backup} ${prev_backup}.bak

# create database dump
docker exec -i docasys-db mysqldump -uroot -proot cs-326244_doca > ${backup_dir}/dump_$(date '+%Y-%m-%d').sql

# list backups
ls -lh ${backup_dir}
