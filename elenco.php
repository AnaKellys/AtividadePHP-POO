<?php

require_once './autoload.php';

use Source\Time\Elenco;
use Source\Time\Jogador;
use Source\Time\Pessoas;
use Source\Time\Profissional;
use Source\Time\Posicao;

$elenco = new Elenco();

$teste = new Profissional('name', 47, 'Médico', 5000);

// $teste1 = ; 

$elenco->adicionaJogador(new Jogador(
  'juliio',
  25,
  63.0,
  1.80,
  '15',
  'Jogador',
  1500,
  new Posicao('uma posição', true)
));

$elenco->adicionaJogador(new Jogador(
  'Leleo',
  25,
  63.0,
  1.80,
  '10',
  'Jogador',
  1500,
  new Posicao('Ataque', true)
));

$elenco->exibeJogador();




// $posicao = new Posicao('tal posição', 'reserva');

// unset($segundaConta);

// $lista[] = $teste;
// $lista[] = $teste1;
// $lista[] = $posicao;


// // print_r($teste);
// print_r($lista);

// print Pessoas::recuperarPessoasEquipe();
