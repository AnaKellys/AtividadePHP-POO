<?php

namespace Source\Time;

use Source\Time\Profissional;
use Source\Time\Posicao;

class Jogador extends Profissional
{
  private string $numeroCamisa;
  private float $peso;
  private float $altura;

  public Posicao $posicao;

  public function __construct(
    string $nome,
    int $idade,
    float $peso,
    float $altura,
    string $numeroCamisa,
    string $profissional,
    float $salario,
    Posicao $posicao
  ) {
    parent::__construct($nome, $idade, $profissional, $salario);
    $this->numeroCamisa = $numeroCamisa;
    $this->peso = $peso;
    $this->altura = $altura;
    $this->posicao = $posicao;
  }

  public function getNumeroCamisa(): string
  {
    return $this->numeroCamisa;
  }

  public function __toString()
  {
    $condicao = $this->posicao->isTitular() ? 'Titular' : 'Reserva';
    return "Nome: {$this->getNome()},\nCamisa: {$this->getNumeroCamisa()},\nPosição: {$this->posicao->getPosicao()},\nTitular ou reserva: {$condicao}.\n";
  }
}
