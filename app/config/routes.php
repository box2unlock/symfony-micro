<?php

$routes->add('/hello/{name}', 'AppBundle:Default:hello')->setMethods('GET');
$routes->add('/', 'AppBundle:Default:index')->setMethods('GET');

return $routes;
