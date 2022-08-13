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

| IMAGE                 | NAMES
| --------------------- | ------------------------
| nginx:alpine          | wordpress-99-webserver
| nginx:alpine          | wordpress-99-webpma
| phpmyadmin:fpm-alpine | wordpress-99-pma
| wordpress:fpm-alpine  | wordpress-99-php
| mariadb               | wordpress-99-db
| traefik:v2.8          | platypus-box_traefik_1

| VOLUME NAME
| -----------------
| wordpress-99
| wordpress-pma-99
| wordpress-db-99
