<?php
// podemos usar print ou echo. O mais usado é print
echo 'Olá mundo!';
print "\n teste\n leonardo\n";
// variáveis são espaços de momória que podemos armazenar um dado. '$ ASSIM ABRE UMA VARIÁVEL'
$idade = 21;
echo $idade;

// Operações matemáticas
$soma = 2 + 2;
$subtrai = 2 - 2;
$mutiplica = 2 * 2;
$divide = 2 / 2;
$doisAoCubo = 2 ** 3; //8
$restoDaDivisao =  10 % 3; //1
echo $restoDaDivisao;

//Tipos de dados/primitivos
$idade = 21; // inteiro //int
$salario = 150.50; // real, ponto flutuante, decimal = double ou float
$dividir = 10 / 3; //double float  

$texto = 'Olá mundo!';

//boolean
$V = true;
$F = false;

echo gettype($texto);


// Trabalhando com string/texto
$idade = 20;
echo "sua idade é de: \n" . $idade;
echo "\t"; // tab = um pequeno espaço a frente.
PHP_EOL; // "end of line", recebe o valor de um caracter especial assim tendo a mesma função da quebra de linha.
echo "\nsua idade é de: $idade ";
// "\n" quebra linha - obs.: só podemos adicionar caracter especial com aspas duplas
echo "\nsua idade é de: \"$idade\" anos.";
// adicionar uma dado entre texto


// condições

$idade = 18;
$numeroDePessoas = 2;

if ($idade >= 18) {
  print "...";
} else {
  if ($idade >= 16 && $numeroDePessoas > 1) {
    print "...";
  } else {
    print "...";
  }
}
// || = ou
// && = e
// obs.: tem como melhorar esse código a cima.

// LISTA DE ALUNOS - repetição 1
$contador = 1;

while ($contador <= 15) { // while = enquanto
  print "#$contador" . PHP_EOL; // Ou \n 
  $contador = $contador + 1;
}

// Repetição 2
// São as mesmas coisas
$contador += 1;
$contador++;
$contador = $contador + 1;

for ($contador = 1; $contador <= 15; $contador++) {
  print "#$contador" . PHP_EOL; // Ou \n
}