<?php

require_once './autoload.php';


use Source\Time\Elenco;
use Source\Time\Jogador;
use Source\Time\Profissional;
use Source\Time\Posicao;


try {

  $elenco = new Elenco();

  $elenco->adicionaProfissional(new Profissional('João', 47, 'Médico', 5000));

  $elenco->adicionaProfissional(new Profissional('Amanda', 30, 'Fisioterapeuta', 3300));

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

  $elenco->adicionaJogador(new Jogador(
    'lucas',
    25,
    69.0,
    1.80,
    '5',
    'Jogador',
    1500,
    new Posicao('Volante', true)
  ));


  print "------- Lista Jogadores -------\n";
  $elenco->exibeJogadores();
  print "\n\n";
  print "----- Lista Profissionais -----\n";
  $elenco->exibeProfissional();

} catch (\Exception $exception) {
  print $exception->getMessage() . PHP_EOL;
}
