<?php

namespace Source\Time;

abstract class Pessoas
{
  private string $nome;
  private int $idade;

  public function __construct(string $nome, int $idade)
  {
    $this->nome = $nome;
    $this->idade = $idade;
  }

  public function getNome(): string
  {
    return $this->nome;
  }

  public function getIdade(): string
  {
    return $this->idade;
  }
}
