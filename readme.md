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

| IMAGE                 | NAMES
| --------------------- | ------
| nginx:alpine          | wordpress-99-webserver
| nginx:alpine          | wordpress-99-webpma
| phpmyadmin:fpm-alpine | wordpress-99-pma
| mariadb               | wordpress-99-db
| wordpress:fpm-alpine  | wordpress-99-php
| traefik:v2.8          | platypus-box_traefik_1

| DRIVER    | VOLUME NAME
| --------- | -----------
| local     | wordpress-99
| local     | wordpress-db-99
| local     | wordpress-pma-99
