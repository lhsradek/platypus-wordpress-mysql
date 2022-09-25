# Wordpress for platypus box with mysql, phpMyAdmin and Redis

## Setup
1) create .env file ```cp .env.dist .env```
2) run docker ```bin/start```


| REPOSITORY       |  TAG         | SIZE
| ---------------- | ------------ | -------
| wordpress        | fpm-alpine   | 299MB
| phpmyadmin       | fpm-alpine   | 128MB
| php              | fpm-alpine   | 73.4MB
| nginx            | alpine       | 23.5MB
| redis            | alpine       | 28.5MB
| rediscommander   | latest       | 77.8MB
| mariadb          | ubuntu       | 383MB
| traefik          | v2.8         | 107MB


| IMAGE                 | NAMES                | SERVICES  | HOSTNAMES | WEB HOSTNAMES
| --------------------- | -------------------- | --------- | --------- | -------------------
| nginx:alpine          | wordpress-99-webwp   | webwp     | webwp     | pma, webwp, webpma
| wordpress:fpm-alpine  | wordpress-99-php     | webwp-php | webwp-php | webwp-php
| phpmyadmin:fpm-alpine | wordpress-99-pma     | wepma-php | pma-php   | wepma-php
| mariadb:ubuntu        | wordpress-99-db      | db        | db        |
| redis:alpine          | wordpress-99-redis   | redis     | redis     |
| rediscommander:latest | wordpress-99-webrc   | webrc     | webrc     | rc
                                                                                

| VOLUME NAME
| --------------------
| wordpress-wp-99
| wordpress-pma-99
| wordpress-db-99
| wordpress-redis-99


Example of connection:
| TCP Connections (Source Host:Port)    |      Packets    |    Bytes  |  Flag   |  Iface
| ------------------------------------- | --------------- | --------- | ------- | -------
|┌172.18.0.9:37000                      |    =       26   |     3036  |  CLOSE  |  eth0
|└172.18.0.3:443                        |    =       24   |    29881  |  CLOSE  |  eth0
|┌172.18.0.3:40928                      |    =        5   |     1652  |  CLOSE  |  eth0
|└172.18.0.2:9000                       |    =        5   |     4388  |  CLOSE  |  eth0

