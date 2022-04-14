#!/usr/bin/env sh

docker exec -i docasys-db mysqldump -ucs-32_doca_u -pcs-32_doca_u cs-326244_doca > ./mysql/init/dump_$(date '+%Y-%m-%d').sql
