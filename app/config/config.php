<?php

$container->loadFromExtension('framework', [
    'secret' => '%env(SYMFONY_SECRET)%',
    'templating' => [
        'engines' => ['twig'],
    ],
    'annotations' => [
        'enabled' => false,
    ],
]);
