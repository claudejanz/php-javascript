# Full stack demo (do not use still in dev)
[![Latest Stable Version](https://poser.pugx.org/claudejanz/php-javascript/v/stable.svg)](https://packagist.org/packages/claudejanz/php-javascript) [![Total Downloads](https://poser.pugx.org/claudejanz/php-javascript/downloads.svg)](https://packagist.org/packages/claudejanz/php-javascript) [![Latest Unstable Version](https://poser.pugx.org/claudejanz/php-javascript/v/unstable.svg)](https://packagist.org/packages/claudejanz/php-javascript) [![License](https://poser.pugx.org/claudejanz/php-javascript/license.svg)](https://packagist.org/packages/claudejanz/php-javascript)

This is a demo how to run [Yii2 framework][yii-link], [Laravel][laravel-link] and [Symfony][symfony-link] as individual services and backoffices running with [Mysql][mysql-link] database and plug [Vuejs][vuejs-link], [Reactjs][reactjs-link] and [Angular][angular-link] as front views.
Everthing runs in [Docker][docker-link] containers.




# Installation
- Clone repository
- Install [Docker][docker-link]

## Start containers
```bash
docker-compose up -d
```
## Wait for mysql first startup
Watch "cache/mysql" folder until laravel, yii, symfony databases are created.
A folder for each data base should show up. This can take several minutes the first time.

## Migrate databases
### Yii
```bash
docker-compose exec yii yii migrate
```
### Laravel
```bash
docker-compose exec laravel php ../artisan migrate
```
### Symfony
```bash
docker-compose exec symfony php artisan migrate
```

# View result

- yii2: http://localhost:8080
- laravel: http://localhost:8081
- symfony: http://localhost:8082
- vuejsjs: http://localhost:8083
- reactjsjs: http://localhost:8084
- angularjs: http://localhost:8085

---
## Log into containers

### Yii2 container
```bash
docker-compose run --rm yii bash
```
### Laravel container
```bash
docker-compose run --rm laravel bash
```
### Symfony container
```bash
docker-compose run --rm symfony bash
```
### Vuejs container
```bash
docker-compose run --rm vuejs bash
```
### Reactjs container
```bash
docker-compose run --rm reactjs bash
```
### Angular container
```bash
docker-compose run --rm angular bash
```
### Mysql container
```bash
docker-compose run --rm db bash
```

[yii-link]: https://www.yiiframework.com/
[laravel-link]: https://laravel.com/
[symfony-link]: https://symfony.com/
[vuejs-link]: https://vuejs.org/
[reactjs-link]: https://reactjs.org/
[angular-link]: https://angular.io/
[docker-link]: https://www.docker.com/
[mysql-link]: https://www.mysql.com/
