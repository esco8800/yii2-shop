#!/bin/bash
. .env
    docker-compose down


sudo -E sed -i '' "/$VIRTUAL_HOST_CONTAINER_NAME /d" /etc/hosts

echo "Container $VIRTUAL_HOST_CONTAINER_NAME  is stopped"
