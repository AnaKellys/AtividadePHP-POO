<?php

namespace Source\Time;
use Source\Time\Pessoas;

class Profissional extends Pessoas
{

  public string $profissional;
  private float $salario;

  public function __construct(string $nome, float $idade, string $profissional, float $salario)
  {
    parent::__construct($nome, $idade);
    $this->profissional = $profissional;
    $this->salario = $salario;
  }
}


// private static int $numeroDePessoas = 1;

// public function __construct(Titular $titular)
// {
//   $this->titular = $titular;
//   $this->saldo = 0;

//   self::$numeroDeContas++;
// }


// public static function recuperarNumeroDeContas(): int
// {
//   return self::$numeroDeContas;
// }