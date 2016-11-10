<?php

use Symfony\Component\HttpFoundation\Request;
// можно еще дебаг поставить

/** @var \Composer\Autoload\ClassLoader $loader */
$loader = require __DIR__.'/../app/autoload.php';
include_once __DIR__.'/../var/bootstrap.php.cache';

//$kernel = new AppKernel('prod', false);
$kernel = new AppKernel('dev', true);
// Кеширование страницы
$kernel->loadClassCache();
//$kernel = new AppCache($kernel);

// When using the HttpCache, you need to call the method in your front controller instead of relying on the configuration parameter
//Request::enableHttpMethodParameterOverride();
$request = Request::createFromGlobals();
// Тут уже находится шаблон и все данные с БД
$response = $kernel->handle($request);
// отправляем пользователю
$response->send();
// очищаем память, закрывает соединение с БД
$kernel->terminate($request, $response);
