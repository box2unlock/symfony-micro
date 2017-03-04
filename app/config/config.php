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
