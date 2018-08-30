# Full stack demo
[![Latest Stable Version](https://poser.pugx.org/claudejanz/php-javascript/v/stable.svg)](https://packagist.org/packages/claudejanz/php-javascript) [![Total Downloads](https://poser.pugx.org/claudejanz/php-javascript/downloads.svg)](https://packagist.org/packages/claudejanz/php-javascript) [![Latest Unstable Version](https://poser.pugx.org/claudejanz/php-javascript/v/unstable.svg)](https://packagist.org/packages/claudejanz/php-javascript) [![License](https://poser.pugx.org/claudejanz/php-javascript/license.svg)](https://packagist.org/packages/claudejanz/php-javascript)

This is a demo how to run [yii2 framework][yii-link]

## Installation
- Clone repository
- Install docker
---
## Run applications
```bash
docker-compose up -d
```
---
## View result

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

[yii-link]: https://www.yiiframework.com/
[laravel-link]: https://laravel.com/
[symfony-link]: https://symfony.com/
[vuejs-link]: https://vuejs.org/
[reactjs-link]: https://reactjs.org/
[angular-link]: https://angular.io/
