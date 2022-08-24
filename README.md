# nicodinus/php-cs-fixer-config

![License](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)

## Installation

```
composer require --dev nicodinus/php-cs-fixer-config
```

## Usage

### Configuration

Create a configuration file `.php-cs-fixer.dist` in the root of the project:

```php
<?php

$config = new Nicodinus\lib\Config();

$config->getFinder()
    ->in(__DIR__ . '/lib')
    ->in(__DIR__ . '/test');

$cacheDir = \getenv('TRAVIS') ? \getenv('HOME') . '/.php-cs-fixer' : __DIR__;
$config->setCacheFile($cacheDir . '/.php_cs.cache');

return $config;
```

### Git

Add `.php_cs.cache` (the cache file used by `php-cs-fixer`) to `.gitignore`:

```
/vendor
/.idea
/composer.lock
/.php_cs.cache
/.phpunit.result.cache
```
