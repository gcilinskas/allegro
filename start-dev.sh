#!/bin/bash

docker-compose -f ./docker/docker-compose.yml build

if [[ "$OSTYPE" == "darwin"* ]]; then
	docker volume create --name=be
	docker-compose -f ./docker/docker-compose.yml -f ./docker/docker-compose.sync.yml up -d
	docker-sync start -c ./docker/docker-sync.yml
else
	docker-compose -f ./docker/docker-compose.yml up -d
fi