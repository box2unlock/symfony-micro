<?php

/**
 * Framework
 */
$container->loadFromExtension('framework', [
    'secret' => '%env(SYMFONY_SECRET)%',
    'templating' => [
        'engines' => ['twig'],
    ],
    'annotations' => [
        'enabled' => false,
    ],
    'session' => [
        'handler_id' => 'session.handler.native_file',
        'name' => 'sess',
        'cookie_lifetime' => 0,
        'save_path' => '%kernel.cache_dir%/sessions',
    ],
    'profiler' => null,
]);

/**
 * Twig
 */
$container->loadFromExtension('twig', [
    'strict_variables' => true,
]);

/**
 * Doctrine
 */
$container->loadFromExtension('doctrine', [
    'dbal' => [
        'default_connection' => 'default',
        'connections' => [
            'default' => [
                'url' => '%env(DATABASE_URL)%',
            ],
        ],
    ],
    'orm' => [
        'auto_mapping' => true,
    ],
]);
