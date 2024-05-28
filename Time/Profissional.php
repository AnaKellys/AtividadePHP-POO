<?php

namespace Source\Time;
use Source\Time\Pessoas;

class Profissional extends Pessoas
{

  private string $profissional;
  private float $salario;

  public function __construct(string $nome, float $idade, string $profissional, float $salario)
  {
    parent::__construct($nome, $idade);
    $this->profissional = $profissional;
    $this->salario = $salario;
  }

  public function getSalario(): string
  {
    return $this->salario;
  }

  public function getProfissional(): string
  {
    return $this->profissional;
  }

  public function __toString()
  {
    return "Nome: {$this->getNome()},\nProfissão: {$this->getProfissional()},\nSalário: {$this->getSalario()}.\n";
  }

}