## Clone the project
```shell
$ git clone git@github.com:prafaheliarison/gestion-note-scolaire.git
```

## Build and launch Docker containers

```shell
$ cd docker/
$ docker-compose build --no-cache
$ docker-compose -f admin.yml -f docker-compose.yml up -d
```
> **Note:** install **docker** if it is not yet present on the machine before running these commands

## Update the vendor libraries

```shell
$ docker exec -it sayna-php /bin/sh
$ composer install
$ npm install
```

## Import database

Open **http://localhost:7001** to access to phpmyadmin and import sql file **sayna-database.sql**

## Launch application

Open **http://localhost:7000** from your favorite browser (Firefox ;)) to see the application

## And voilà
