<?php

include 'function.php';

$contaCorrente = [
  "123.456.789-12" => [
    'titular' => 'Vini',
    'saldo' => 500.00
  ],
  "123.456.789-13" => [
    'titular' => 'zé',
    'saldo' => 1000.00
  ],
  "123.456.789-14" => [
    'titular' => 'lari',
    'saldo' => 300.00
  ]
];

$contaCorrente['123.456.789-12'] = sacar($contaCorrente['123.456.789-12'], valorASacar: 500);
$contaCorrente['123.456.789-13'] = sacar($contaCorrente['123.456.789-13'], valorASacar: 500);
$contaCorrente['123.456.789-14'] = depositar($contaCorrente['123.456.789-14'], valorDeposito: 500);

unset($contaCorrente['123.456.789-12']);

capitalLetters($contaCorrente['123.456.789-14']);

print "<ul>";


// foreach ($contaCorrente as $CPF => $conta) {
//   list('titular' => $titular, 'saldo' => $saldo) = $conta;
//   exibe($conta);

  // exibeMSG(mensagem: "$CPF $titular $saldo");

  // exibeMSG(mensagem: "$CPF $conta[titular] $conta[saldo]");
  // exibeMSG(mensagem: "{$CPF} {$conta["titular"]} {$conta["saldo"]}"); --> outro modo de exibir
// }

// print "</ul>";

// $nome = "Leonardo Oliveira";
// for ($i = 0; $i < 10; $i++) {
//   print "<div><strong>$nome</strong></div>";
// }



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Contas correntes</h1>
  <dl>
   <?php foreach ($contaCorrente as $cpf => $conta) {?>
    <dt>
      <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
    </dt>
    <dd>
      Saldo: $conta['saldo']; ?>
    </dd>
    <?php } ?>
  </dl>
</body>
</html>