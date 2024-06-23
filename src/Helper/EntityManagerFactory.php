<?php

namespace Alura\Doctrine\Helper;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\ORMSetup;
use Doctrine\DBAL\DriverManager;

// Simple doctrine configuration



class EntityManagerFactory {
  
  public function getEntityManager(): EntityManagerInterface {
    
    $rootDir = __DIR__ . "/../..";
    $config = ORMSetup::createAttributeMetadataConfiguration(
      paths: array($rootDir . "/src/"), // Onde estão as classes
      isDevMode: true
    );
    
    // database connection
    $connection = DriverManager::getConnection([
      'driver' => 'pdo_sqlite',
      'path' => $rootDir . '/var/data/banco.sqlite' // caminho do banco de dados
    ]);
    
    return new EntityManager($connection, $config);
    
  }
  

}
