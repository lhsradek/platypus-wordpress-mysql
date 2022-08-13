# Wordpress for platypus box with mysql and phpMyAdmin

## Setup
1) create .env file ```cp .env.dist .env```
2) run docker ```bin start```

NAME                         DRIVER    SCOPE

bridge                       bridge    local

docker_gwbridge              bridge    local

host                         host      local

none                         null      local

platypus-local-dev-network   bridge    local


REPOSITORY         TAG            SIZE

wordpress          fpm-alpine     299MB

phpmyadmin         fpm-alpine     128MB

traefik            v2.8           107MB

php                fpm-alpine     73.4MB

nginx              alpine         23.5MB

mariadb            latest         383MB


IMAGE                   COMMAND                  PORTS                                                    NAMES

nginx:alpine            "/docker-entrypoint.…"   80/tcp                                                   wordpress-99-webserver

nginx:alpine            "/docker-entrypoint.…"   80/tcp                                                   wordpress-99-webpma

phpmyadmin:fpm-alpine   "/docker-entrypoint.…"   9000/tcp                                                 wordpress-99-pma

mariadb                 "docker-entrypoint.s…"   0.0.0.0:3306->3306/tcp                                   wordpress-99-db

wordpress:fpm-alpine    "docker-entrypoint.s…"   9000/tcp                                                 wordpress-99-php
traefik:v2.8            "/entrypoint.sh trae…"   0.0.0.0:8080->8080/tcp, 80/tcp, 0.0.0.0:8443->8443/tcp   platypus-box_traefik_1


DRIVER    VOLUME NAME

local     wordpress-99

local     wordpress-db-99

local     wordpress-pma-99

