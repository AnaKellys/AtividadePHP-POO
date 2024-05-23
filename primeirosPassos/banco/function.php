<?php
function sacar(array  $conta, float $valorASacar): array
{
  if ($valorASacar > $conta["saldo"]) {
    exibeMSG(mensagem: " Você não pode sacar");
  } else {
    $conta["saldo"] -= $valorASacar;
  }
  return $conta;
}

function exibeMSG(string $mensagem)
{
  print $mensagem . "<br>";
}

function depositar(array $conta, float $valorDeposito): array
{
  if ($valorDeposito > 0) {
    $conta['saldo'] += $valorDeposito;
  } else {
    exibeMSG(mensagem: "deposito precisa ser positivo");
  }
  return $conta;
}

function capitalLetters(array &$conta)
{
  $conta['titular'] = strtoupper($conta['titular']);
  // mb_strtoupper(), coloca todos caracter de uma string em maiúscula
}

function exibe(array $conta)
{
  ['titular' => $titular, 'saldo' => $saldo] = $conta;
  print "<li>Titular: $titular. Saldo: $saldo</li>";
}

