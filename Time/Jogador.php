<?php


use Source\Time\Pessoas;

class Jogador extends Profissional
{
  public string $apelido;
  public string $camisa;

  public function __construct(string $apelido, string $camisa)
  {
    $this->apelido = $apelido;
    $this->camisa = $camisa;
  }
  
  public function posicaoJogadores(string $lugar){
    
  }

    
  
}





// public function __destruct()
//   {
//     self::$numeroDeContas--;
//   }


//   <?php

// namespace Banco\Modelo\Conta;

// abstract class Conta
// {
//   private Titular $titular;
//   protected float $saldo;
//   private static int $numeroDeContas = 0;

//   public function __construct(Titular $titular)
//   {
//     $this->titular = $titular;
//     $this->saldo = 0;

//     self::$numeroDeContas++;
//   }

//   public function __destruct()
//   {
//     self::$numeroDeContas--;
//   }