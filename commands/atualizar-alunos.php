<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Helper\EntityManagerFactory;
use Doctrine\ORM\EntityManager;

require __DIR__ . "/../vendor/autoload.php";

$id = $argv[1];
$novoNome = $argv[2];

$emFactory = new EntityManagerFactory();
$em = $emFactory->getEntityManager();

/** @var Aluno $aluno*/
$aluno = $em->find(Aluno::class, $id);

$aluno->setNome($novoNome);

$em->flush($aluno);

