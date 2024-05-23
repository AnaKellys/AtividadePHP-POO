<?php

$flores = [
	"flores" => [
		// lista 
		[
			"nome" => "rosa",
			"quantidade_petalas" => 100,
		],
		[
			"nome" => "lirio",
			"quantidade_petalas" => 85,
		],
		[
			"nome" => "margarida",
			"quantidade_petalas" => 152,
		]
	],
	"floricultura" => [
		//lista
		[
			"nome" => "flores Do Saber",
			"floresDisponiveis" => [
				[
					"nome" => "rosa",
					"quantidade_petalas" => 100,
				],
				[
					"nome" => "lirio",
					"quantidade_petalas" => 85,
				],
			],
		],
		[
			"nome" => "flor de Sol",
			"floresDisponiveis" => [
				[
					"nome" => "margarida",
					"quantidade_petalas" => 152,
				],
				[
					"nome" => "girassol",
					"quantidade_petalas" => 25,
				],
				[
					"nome" => "dama-da-noite",
					"quantidade_petalas" => 62,
				]
			]
		],
		[
			"nome" => "Floração",
			"floresDisponiveis" => [
				[
					"nome" => "Rosa do deserto",
					"quantidade_petalas" => 70
				],
				[
					"nome" => "Orquidea",
					"quantidade_petalas" => 20

				]
			]
		]
	]

];

function quantidadePetalas($floresDisponiveis)
{
	$quantidadepetalas = 0;

	for ($i = 0; $i < count($floresDisponiveis); $i++) {
		$quantidadepetalas += $floresDisponiveis[$i]['quantidade_petalas'];
	}

	return $quantidadepetalas;
}


for ($i = 0; $i < count($flores['floricultura']); $i++) {
	$floricultura = $flores['floricultura'][$i];
	$quantidadeTotal = quantidadePetalas($floricultura["floresDisponiveis"]);
	print "A floricultura {$floricultura['nome']} tem {$quantidadeTotal} \n";
}




// foreach ($flores["flores"] as $flor) {
//   print "Nome da flor: {$flor['nome']}\nQuantidade de petalas: {$flor['quantidade_petalas']} \n";
// }

// for ($i = 0; $i < count($flores['flores']); $i++) {
// 	print "Nome da flor: {$flores['flores'][$i]['nome']}\nQuantidade de petalas: {$flores['flores'][$i]['quantidade_petalas']} \n";
// }