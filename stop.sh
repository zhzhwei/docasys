#!/usr/bin/env sh

docker-compose down --remove-orphans || docker container prune -f && docker network prune -f

exit 1
