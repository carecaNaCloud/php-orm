<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Helper\EntityManagerFactory;
use Doctrine\ORM\EntityManager;

  require_once __DIR__ . "/../vendor/autoload.php";

  $emFactory = new EntityManagerFactory();
  $em = $emFactory -> getEntityManager();
  $alunoRepository = $em -> getRepository(Aluno::class);

  /** @var Aluno[] $alunos */
  $alunos = $alunoRepository -> findAll();
  foreach ($alunos as $aluno) {
    echo "ID: {$aluno->getId()} \nNome: {$aluno->getNome()} \n\n";
  }

  $vinicius = $alunoRepository->find(4);
  echo $vinicius->getNome();
  echo "\n\n";
  
  $nico = $alunoRepository->findOneBy(['nome' => 'Nicco']);
  var_dump($nico);  
  echo "\n";



