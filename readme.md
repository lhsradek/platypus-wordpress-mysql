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

| VOLUME NAME
| -----------------
| wordpress-99
| wordpress-pma-99
| wordpress-db-99

example:
| TCP Connections (Source Host:Port)    |      Packets    |    Bytes  |  Flag   |  Iface
| ------------------------------------- | --------------- | --------- | ------- | -------
|┌172.18.0.9:37000                      |    =       26   |     3036  |  CLOSE  |  eth0
|└172.18.0.3:443                        |    =       24   |    29881  |  CLOSE  |  eth0
|┌172.18.0.3:40928                      |    =        5   |     1652  |  CLOSE  |  eth0
|└172.18.0.2:9000                       |    =        5   |     4388  |  CLOSE  |  eth0

