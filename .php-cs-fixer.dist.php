<?php

$config = new Nicodinus\lib\Config();

$config->getFinder()
    ->in(__DIR__ . '/lib')
    ->in(__DIR__ . '/test');

$cacheDir = \getenv('TRAVIS') ? \getenv('HOME') . '/.php-cs-fixer' : __DIR__;
$config->setCacheFile($cacheDir . '/.php_cs.cache');

return $config;