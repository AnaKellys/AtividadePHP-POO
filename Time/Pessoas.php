<?php

namespace Source\Time;

abstract class Pessoas
{
  public string $nome;
  public string $idade;
  public string $dataNascimento;
  public string $peso;
  public string $altura;

  public function __construct(string $nome, string $idade, string $dataNascimento, string $peso, string $altura)
  {
   $this->nome = $nome;
   $this->idade = $idade; 
   $this->dataNascimento = $dataNascimento;
   $this->peso = $peso;
   $this->altura = $altura;
  }
}