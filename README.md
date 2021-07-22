### Useful commands
Start containers in background\
`docker compose up -d`

After updating docker-compose.yml make sure to restart containers with\
`docker compose restart`

Get a list of all running containers\
`docker compose ps`

Stop containers\
`docker compose stop`

Stop containers and remove their volumes\
`docker compose down -v`

To destroy all containers and get rid of orphan containers execute:\
`docker compose down -v --rmi all --remove-orphans`

Launch a bash inside the given container\
`docker compose exec <container_name> bash`

Observe logs of all running containers\
`docker compose logs -f`

Observe logs for a specific container\
`docker compose logs -f <container_name>`
