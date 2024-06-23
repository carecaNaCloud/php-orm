<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Helper\EntityManagerFactory;
use Doctrine\ORM\EntityManager;

require_once __DIR__ . "/../vendor/autoload.php";

$id = $argv[1];

$emFactory = new EntityManagerFactory();
$em = $emFactory->getEntityManager();

$aluno = $em->find(Aluno::class, $id);
$em->remove($aluno);
$em->flush();