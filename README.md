## Docker LEMP

The projects primary goal is to learn docker and setup my own docker stack for local development. 
Many thanks to @osteel for his great explanation about this topic and his very well documented blog posts at https://tech.osteel.me/

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
