<?php

//  Tmabém podemos utilizar como "$list = array(...)"
$lista = [1, 15, 60, 36];
$lista = $lista[0]; // [aqui escolhe a posição] iniciando em 0

// LOOPS em lista
$lista = [1, 15, 60, 36];

for ($i = 0; $i <= 3; $i++) {
  print $lista[$i] . PHP_EOL;
}



//  Se minha lista for extensa 
$listaG = [1, 15, 60, 36, 40, 90, 78, 3, 2];

// Adicionando um item depois do array pronto
$listaG[] = 20;
// como não informo nenhum valor ele adiciona no último

// 'count()' me infoma o tamnaho do array, porém ele inicia sua contagem com 1 e não 0
print count($listaG);

for ($i = 0; $i < count($listaG); $i++) {
  print $listaG[$i] . PHP_EOL;
}



// Agrupar dados com PHP
$conta1 = [
  //  Também podemos definir com cpf
  'titular' => 'Vini',
  'saldo' => 500.00
];
$conta2 = [
  // ex.: 12345678996 => 'zé',
  'titular' => 'zé',
  'saldo' => 1000.00
];
$conta3 = [
  'titular' => 'lari',
  'saldo' => 300.00
];

$contaCorrente = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contaCorrente); $i++) {
  print $contaCorrente[$i]['titular']. "\n";
}




// Outra forma é com: foreach= para cada
$contaCorrente = [
  12345678912 => [
    'titular' => 'Vini',
    'saldo' => 500.00
  ],
  12345678913 => [
    'titular' => 'zé',
    'saldo' => 1000.00
  ],
  12345678914 => [
    'titular' => 'lari',
    'saldo' => 300.00
  ]
];

// Adicionando um item depois do array pronto
$contaCorrente [] = [
  'titular' => 'ana',
  'saldo' => 800.00
];
// posso adicionar com o cpf sendo número, string, e vazio
// quando utilizo a 1° opção ele adiciona na próxima casa do array
// 2º opção, ele adiciona o novo indice na posição [0] 
// 3º opção, ele "cria" um cpf pegando maior número e trocando o último

foreach ($contaCorrente as $CPF => $conta) {
  print $CPF . PHP_EOL;
}


//  TIPOS DE CHAVES

// O php só trabalha com chaves em aray assosiativo do tipo numerico inteiro e string. Se o tipo for diferente ele vai converter para string ou numero

// https://www.php.net/manual/pt_BR/language.types.array.php