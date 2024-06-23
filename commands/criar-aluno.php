<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Helper\EntityManagerFactory;
use Doctrine\ORM\EntityManager;

require_once __DIR__ . '/../vendor/autoload.php';

$aluno = new Aluno($argv[1]);

$factory = new EntityManagerFactory();
$em = $factory->getEntityManager();

$em->persist($aluno);
$em->flush();