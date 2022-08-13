# Wordpress for platypus box with mysql and phpMyAdmin

## Setup
1) create .env file ```cp .env.dist .env```
2) run docker ```bin start```


| REPOSITORY       |  TAG       | SIZE
| ---------------- | ---------- | ----
| wordpress        | fpm-alpine | 299MB
| phpmyadmin       | fpm-alpine | 128MB
| traefik          | v2.8       | 107MB
| php              | fpm-alpine | 73.4MB
| nginx            | alpine     | 23.5MB
| mariadb          | latest     | 383MB

| IMAGE                 | COMMAND                | NAMES
| --------------------- | ---------------------- | ------
| nginx:alpine          | "/docker-entrypoint.…" | wordpress-99-webserver
| nginx:alpine          | "/docker-entrypoint.…" | wordpress-99-webpma
| phpmyadmin:fpm-alpine | "/docker-entrypoint.…" | wordpress-99-pma
| mariadb               | "docker-entrypoint.s…" | wordpress-99-db
| wordpress:fpm-alpine  | "docker-entrypoint.s…" | wordpress-99-php
| traefik:v2.8          | "/entrypoint.sh trae…" | platypus-box_traefik_1

| DRIVER    | VOLUME NAME
| --------- | -----------
| local     | wordpress-99
| local     | wordpress-db-99
| local     | wordpress-pma-99
