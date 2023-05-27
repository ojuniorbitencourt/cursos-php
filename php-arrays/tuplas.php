<?php

$dados = [
    'nome' => 'Vinicius',
    'nota' => 10,
    'idade'=> 24
];

// ['nome' => $nome, 'nota' => $nota, 'idade' => $idade] = $dados1;
// Ao invés de usar este exemplo acima, usasse extract
extract($dados);
var_dump($nome, $nota, $idade);
// Compact é o contrário do extract
var_dump(compact('nome', 'nota', 'idade'));