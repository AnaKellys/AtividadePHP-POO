<?php

namespace Source\Time;
use Source\Time\Profissional;
use Source\Time\Posicao;

class Jogador extends Profissional
{
  public string $camisa;
  public float $peso;
  public float $altura;

  public Posicao $posicao;

  public function __construct(string $nome, int $idade, float $peso, float $altura,
   string $camisa, string $profissional, float $salario, Posicao $posicao)
  {
    parent::__construct($nome, $idade, $profissional, $salario);
    $this->camisa = $camisa;
    $this->peso = $peso;
    $this->altura = $altura;
    $this->posicao = $posicao;
  }

  // public function posicaoJogadores(string $posicao, string $titularOuReserva): bool
  // {
  //   if ($posicao === 'atacante' && $titularOuReserva === 'titular') {
  //     return true;
  // }
  // return false;
  // }

}