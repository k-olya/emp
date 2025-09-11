#!/bin/bash
# mysql-cli.sh

# Load .env file
if [ -f .env ]; then
    source .env
else
    echo ".env file not found in current directory"
    exit 1
fi

# Get current directory name
PROJECT_NAME=$(basename "$PWD")

# Docker Compose default container name
CONTAINER_NAME="${PROJECT_NAME}-db-1"

# Run MariaDB CLI inside the container
docker exec -it "$CONTAINER_NAME" mariadb -u"$MYSQL_USER" -p"$MYSQL_PASSWORD" "$MYSQL_DATABASE"
