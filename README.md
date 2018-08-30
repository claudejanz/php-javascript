# Full stack demo
[![Latest Stable Version](https://poser.pugx.org/claudejanz/php-javascript/v/stable.svg)](https://packagist.org/packages/claudejanz/php-javascript) [![Total Downloads](https://poser.pugx.org/claudejanz/php-javascript/downloads.svg)](https://packagist.org/packages/claudejanz/php-javascript) [![Latest Unstable Version](https://poser.pugx.org/claudejanz/php-javascript/v/unstable.svg)](https://packagist.org/packages/claudejanz/php-javascript) [![License](https://poser.pugx.org/claudejanz/php-javascript/license.svg)](https://packagist.org/packages/claudejanz/php-javascript)

This is a demo how to run [Yii2 framework][yii-link], [Laravel][laravel-link] and [Symfony][symfony-link] as individual services and backoffices and plug [Vuejs][vuejs-link], [Reactjs][reactjs-link] and [Angular][angular-link] as front views.
Everthing runed in [Docker][docker-link] containers.



| sdfsd | sdfsff | sadfasdf | sfgsdf | dfghdfgh|sfgsdf | dfghdfgh|
| --- | --- | --- | --- | --- | --- | --- |
| ![yii][yii-logo] | ![laravel][laravel-logo] | ![symfony][symfony-logo] | ![vuejs][vuejs-logo] | ![reactjs][reactjs-logo] | ![angular][angular-logo] | ![docker][docker-logo] |


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
[docker-link]: https://www.docker.com/
[mysql-link]: https://www.mysql.com/
[yii-logo]: (https://www.yiiframework.com/image/yii_logo_light.svg | width=100)
[laravel-logo]: (https://github.com/laravel/art/blob/master/Laravel-l-slant.svg  | width=100)
[symfony-logo]: https://symfony.com/logos/symfony_black_02.svg
[vuejs-logo]: https://github.com/vuejs/art/blob/master/logo.svg
[reactjs-logo]: https://commons.wikimedia.org/wiki/File:React-icon.svg
[angular-logo]: https://angular.io/assets/images/logos/angular/angular.svg
[docker-logo]: https://www.docker.com/sites/default/files/horizontal.png
[mysql-logo]: https://www.mysql.com/common/logos/logo-mysql-170x115.png