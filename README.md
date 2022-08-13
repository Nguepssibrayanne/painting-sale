# Painting sale

Painting sale is  a painting sales website.

## Development environment

### Pré-requis

* PHP 7.4
* composer
* CLI symfony
* node js et npm || yarn

you can check the prerequisites with the following command (from the symfony CLI):

```bash
symfony check:requirements
```

## Start development environment

```bash
composer install
npm install || yarn install
npm run server-dev || yarn run server-dev
npm run build || yarn run build 
symfony serve || php -S 127.0.0.1:8000 -t public
```

## Start the Tests
```bash
php bin/phpunit --testdox
```