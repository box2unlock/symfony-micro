<?php

if (in_array($environment, ['dev'], true)) {
    $routes->mount('/_wdt', $routes->import('@WebProfilerBundle/Resources/config/routing/wdt.xml'));
    $routes->mount('/_profiler', $routes->import('@WebProfilerBundle/Resources/config/routing/profiler.xml'));
}

$routes->add('/hello/{name}', 'AppBundle:Default:hello', 'hello')->setMethods('GET');
$routes->add('/post', 'AppBundle:Default:post', 'post')->setMethods('GET');
$routes->add('/', 'AppBundle:Default:index', 'home')->setMethods('GET');

return $routes;
