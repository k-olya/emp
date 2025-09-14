#!/bin/bash

# Check .env file
# Get uid and gid of www/
# Run the containers
if [ -f .env ]; then
    WWW_UID=$(stat -c "%u" ./www) WWW_GID=$(stat -c "%g" ./www) docker compose up -d
else
    echo ".env file not found in current directory. please copy and edit .env.example"
    exit 1
fi
