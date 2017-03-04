<?php

/**
 * Load autoloader
 */
$loader = require __DIR__ . '/../app/autoload.php';

/**
 * Grab environment variables
 */
$environment = 'dev';
$debug = true;

if ((getenv('SYMFONY_ENV') !== false)) {
    $environment = getenv('SYMFONY_ENV');
}
if ((getenv('SYMFONY_DEBUG') !== false)) {
    $debug = filter_var(getenv('SYMFONY_DEBUG'), FILTER_VALIDATE_BOOLEAN);
}

/**
 * Construct kernel
 */
$kernel = new AppKernel($environment, $debug);

/**
 * Handle request
 */
$request = Symfony\Component\HttpFoundation\Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);
