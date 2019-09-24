#!/bin/bash

if [[ "$OSTYPE" == "darwin"* ]]; then
	docker-compose -f ./docker/docker-compose.yml stop
	docker-sync stop -c ./docker/docker-sync.yml
else
    docker-compose -f ./docker/docker-compose.yml stop
fi