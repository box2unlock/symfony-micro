<?php

$this->import('config.php');

/**
 * Web Profiler
 */
$container->loadFromExtension('web_profiler', [
    'toolbar' => true,
]);
