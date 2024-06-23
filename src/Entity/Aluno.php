<?php

namespace Alura\Doctrine\Entity;

use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\GeneratedValue;

#[Entity]
class Aluno {

  #[Id, Column(type: "integer"), GeneratedValue(strategy: "IDENTITY")]
  private int $id;

  #[Column(type: "string")]
  private string $nome;

  function __construct(string $nome) {
    $this->nome = $nome; 
  }

  public function getNome() :string {
    return $this->nome;
  }
  public function setNome(string $nome) : object {
    $this->nome=$nome;
    return $this;
  }

  public function getId() : int {
    return $this -> id;
  }

}