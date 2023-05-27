<?php

$notas = [
    'Ana' => 10,
    'João' => 8,
    'Maria' => 9,
    'Roberto' => 7,
    'Vinicius' => 6
];

ksort($notas);
var_dump($notas);

if(is_array($notas))
{
    echo 'Sim, é um array' . PHP_EOL;
}

var_dump(array_is_list($notas));

echo 'Ana fez a prova:' . PHP_EOL;
var_dump(isset($notas['Ana']));

echo 'Alguém tirou 10?' . PHP_EOL;
var_dump(in_array(10, $notas, strict: true));

echo 'Quem tirou 10?' . PHP_EOL;
var_dump (array_search(10, $notas, strict: true));

// array_key_exists = verifica se a chave existe
// in_array = verifica se o valor existe, usar o parâmetro strict: true faz com que verifique o tipo do dado, por baixo dos panos usará este operador ===
// isset = verifica se a chave existe e não é nula