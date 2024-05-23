<?php

$altura = 1.80;
$pesso = 40;

// 'number_format' é usada para formatar números decimais
$result = number_format($pesso / $altura**2, 2);

if ($result <= 18.5) {
  print "Seu IMC é de: $result, você está abaixo do pesso ideal";
}
if ($result >= 18.5 && $result <= 24.9) {
  print "Seu IMC é de: $result, você está com o pesso ideal";
} 
if ($result > 25) {
  print "Seu IMC é de: $result, você está acima do pesso";
}