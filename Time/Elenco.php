<?php

namespace Source\Time;

class Elenco
{
  public array $listaDePessoas;
  private array $listaJogadores;

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
    if ($jogador->posicao->isTitular() && $this->quantidadeTitulares() === self::QUANTIDADE_LIMITE_JOGADORES ) {
      // throw new 
    }
    $this->listaJogadores[] = $jogador;
  }

  public function exibeJogador(): void
  {
    foreach ($this->listaJogadores as $jogador) {
      print "{$jogador->getNome()}\n";
    }
  }

  // formato da impressão
  // public function __toString(): string
  // {
  //   return "{$this->rua}, {$this->numero}, {$this->bairro}, {$this->cidade}";
  //   // implode(", " ,get_object_vars($this));
  // }


  // public function adicionaProfissional(Profissional $profissional)
  // {

  // }

  // for $jogador 
  //   print "nome Jogador: $jogador->getNome(), camisa: $jogador->"

  // public function removeProfissional(Profissional $profissional)
  // {

  // }
}

    // public function __destruct()
    // {
    //   self::$numeroDePessoas--;
    // }