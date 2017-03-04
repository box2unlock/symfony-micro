<?php

use Symfony\Component\DependencyInjection\Reference;

$container
    ->register('app.util.symfony_version', AppBundle\Util\SymfonyVersion::class)
    ->addArgument(new Reference('kernel'));
