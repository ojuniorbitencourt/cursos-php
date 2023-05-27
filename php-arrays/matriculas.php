<?php

$notas2021 = 
[
    'Vinicius',
    'João',
    'Ana',
    'Roberto',
    'Maria'
];

$novosAlunos = 
[
    'Patricia',
    'Nico',
    'Kilderson',
    'Daiane'
];

$alunos2022 = [...$notas2021, 'junior', ...$novosAlunos];

// Para adicionar vários ao mesmo tempo
array_push($alunos2022, 'Alice', 'Bob', 'Charlie');

// Adicionar ao final
$alunos2022[] = 'Luiz';

// Para adicionar no início
array_unshift($alunos2022, 'Stephane', 'Rafaela');

// Para remover o valor do primeiro índice
echo array_shift($alunos2022) . PHP_EOL;

// Para remover o valor do último índice
echo array_pop($alunos2022) . PHP_EOL;


var_dump($alunos2022);