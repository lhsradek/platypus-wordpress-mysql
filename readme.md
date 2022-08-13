# Wordpress for platypus box with mysql and phpMyAdmin

## Setup
1) create .env file ```cp .env.dist .env```
2) run docker ```bin/start```


| REPOSITORY       |  TAG       | SIZE
| ---------------- | ---------- | -------
| wordpress        | fpm-alpine | 299MB
| phpmyadmin       | fpm-alpine | 128MB
| php              | fpm-alpine | 73.4MB
| nginx            | alpine     | 23.5MB
| mariadb          | latest     | 383MB
| traefik          | v2.8       | 107MB

| IMAGE                 | NAMES                     | HOSTNAME
| --------------------- | --------------------------| ---------------------------
| nginx:alpine          | wordpress-99-webserver    | docker.wordpress.local
| wordpress:fpm-alpine  | wordpress-99-php          | docker.wordpress.local
| nginx:alpine          | wordpress-99-webpma       | pma.docker.wordpress.local
| phpmyadmin:fpm-alpine | wordpress-99-pma          | pma.docker.wordpress.local
| mariadb               | wordpress-99-db           | dba.docker.wordpress.local
| traefik:v2.8          | platypus-box_traefik_1    |

| VOLUME NAME
| -----------------
| wordpress-99
| wordpress-pma-99
| wordpress-db-99
