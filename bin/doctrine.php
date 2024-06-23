#!/usr/bin/env php
<?php

 // replace with path to your own project bootstrap file

use Alura\Doctrine\Helper\EntityManagerFactory;
use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Doctrine\ORM\Tools\Console\EntityManagerProvider\SingleManagerProvider;
require_once __DIR__ . '../../vendor/autoload.php';

// replace with mechanism to retrieve EntityManager in your app
$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();


ConsoleRunner::run(
    new SingleManagerProvider($entityManager)
);