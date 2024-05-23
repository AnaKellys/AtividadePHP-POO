<?php

$livrosEAutores = [
  [
    'titulo' => 'Harry Potter e a Pedra Filosofal',
    'autor' => 'J.K. Rowling',
  ],
  [
    'titulo' => 'O Senhor dos Anéis',
    'autor' => 'J.R.R. Tolkien',
  ],
  [
    'titulo' => '1984',
    'autor' => 'George Orwell',
  ],
  [
    'titulo' => 'Orgulho e Preconceito',
    'autor' => 'Jane Austen',
  ],
  [
    'titulo' => 'Cem Anos de Solidão',
    'autor' => 'Gabriel García Márquez',
  ],
  [
    'titulo' => 'Dom Quixote',
    'autor' => 'Miguel de Cervantes',
  ],
  [
    'titulo' => 'Harry Potter e as Relíquias da Morte',
    'autor' => 'J.K. Rowling',
  ],
  [
    'titulo' => 'O Hobbit',
    'autor' => 'J.R.R. Tolkien',
  ],
  [
    'titulo' => 'A Revolução dos Bichos',
    'autor' => 'George Orwell',
  ],
  [
    'titulo' => 'Razão e Sensibilidade',
    'autor' => 'Jane Austen',
  ],
  [
    'titulo' => 'Crônica de uma Morte Anunciada',
    'autor' => 'Gabriel García Márquez',
  ],
  [
    'titulo' => 'Os Três Mosqueteiros',
    'autor' => 'Alexandre Dumas',
  ],
  [
    'titulo' => 'Harry Potter e o Prisioneiro de Azkaban',
    'autor' => 'J.K. Rowling',
  ],
  [
    'titulo' => 'O Silmarillion',
    'autor' => 'J.R.R. Tolkien',
  ],
  [
    'titulo' => 'Animal Farm',
    'autor' => 'George Orwell',
  ],
  [
    'titulo' => 'Emma',
    'autor' => 'Jane Austen',
  ],
  [
    'titulo' => 'O Amor nos Tempos do Cólera',
    'autor' => 'Gabriel García Márquez',
  ],
  [
    'titulo' => 'O Conde de Monte Cristo',
    'autor' => 'Alexandre Dumas',
  ],
  [
    'titulo' => 'Harry Potter e o Cálice de Fogo',
    'autor' => 'J.K. Rowling',
  ],
  [
    'titulo' => 'O Retorno do Rei',
    'autor' => 'J.R.R. Tolkien',
  ],
];

$array = [];


for ($i = 0; $i < count($livrosEAutores); $i++) {
  $autor = $livrosEAutores[$i]['autor'];
  $livro = $livrosEAutores[$i]['titulo'];

  $array[$autor][] = $livro;
}

foreach ($array as $autor => $livros) {
  $nada = count($livros);
  print $autor . " " . $nada . PHP_EOL;
  // print $autor;
  // print_r($livros); 
}

// print_r($array);

// https://www.php.net/manual/pt_BR/function.count.php


// $array = [];

// for ($i = 0; $i < count($livrosEAutores); $i++) {
//   $autor = $livrosEAutores[$i]['autor'];
//   $livro = $livrosEAutores[$i]['titulo'];
//   // print $autor . PHP_EOL;

//   $array[$autor][] =  $livro;
// }

// print_r($array);



// $array = ["nome" => "ana"];
// $array["nome"] = [];
// $array["nome"][] = ;
// $array["nome"][] = "Ana";

// print_r ($array['nome']);




// for ($i=0; $i < count($livrosEAutores) ; $i++) { 
//   $livro = $livrosEAutores[$i]['titulo'];
// 	print $livro . PHP_EOL;
// }






// foreach ($livrosEAutores as $autor) {
//   // print "{$autor['autor']} \n";

//   if ($livrosEAutores['autor']) {
//     print $livrosEAutores['autor'];
    
//   }
// }


// for ($i=0; $i < count($livrosEAutores['autor']) ; $i++) { 
//   $autores = $livrosEAutores['autor'];
// 	print $livrosEAutores['autor'];

// }