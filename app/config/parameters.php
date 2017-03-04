<?php

$container->setParameter('env(SYMFONY_SECRET)', 'ThisTokenIsNotSoSecretChangeIt');
$container->setParameter('env(DATABASE_URL)', 'postgresql://postgres:postgres@localhost/symfony');
