<?php

namespace Source\Time;
class Posicao
{
  private string $posicao;
  private bool $titular;

  public function getPosicao(): string
  {
    return $this->posicao;
  }

  public function isTitular(): bool
  {
    return $this->titular;
  }

  public function __construct(string $posicao, bool $titular)
  {
    $this->posicao = $posicao;
    $this->titular = $titular;
  }
}





// IDEIA:

  // public function trocaPosicao(string $posicao, string $titularOuReserva): void
  // {
  //   if ($valorADepositar < 0) {
  //     print "Valor precisa ser positivo";
  //     return;
  //   }
  //   $this->saldo += $valorADepositar;
  // }