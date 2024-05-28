<?php

namespace Source\Time;

use Source\Time\Exceptions\ExceptionQuantidadeJogadores;

class Elenco
{
  public array $listaDePessoas = [];
  private array $listaJogadores = [];

  public const QUANTIDADE_LIMITE_JOGADORES = 11;

  private function quantidadeTitulares(): int
  {
    $quantidadeTitulares = 0;
    foreach ($this->listaJogadores as $jogador) {
      if ($jogador->posicao->isTitular()) {
        $quantidadeTitulares++;
      }
    }
    return $quantidadeTitulares;
  }

  public function adicionaJogador(Jogador $jogador)
  {
    if ($jogador->posicao->isTitular() && $this->quantidadeTitulares() >= self::QUANTIDADE_LIMITE_JOGADORES) {
      throw new ExceptionQuantidadeJogadores();
    }
    $this->listaJogadores[] = $jogador;
  }

  public function adicionaProfissional(Profissional $profissional)
  {
    $this->listaDePessoas[] = $profissional;
  }

  public function exibeJogadores()
  {
    foreach ($this->listaJogadores as $jogador) {
      print $jogador->__toString() . "\n";
    }
  }

  public function exibeProfissional()
  {
    foreach ($this->listaDePessoas as $profissional) {
      print $profissional->__toString() . "\n";
    }
  }

  // public function removeProfissional(Profissional $profissional)
  // {
  // }
}
