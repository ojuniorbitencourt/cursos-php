<?php

//! Array multidimensional, ou seja, um array de arrays
$notas = 
[
    [
        'aluno' => 'Maria',
        'nota' => 10,
    ],
    [
        'aluno' => 'Vinicius',
        'nota' => 6,
    ],
    [
        'aluno' => 'Ana',
        'nota' => 9,
    ],
];

// function ordenaNotas(array $nota1, array $nota2): int
// {
//     return $nota1['nota'] <=> $nota2['nota'];
// }

// usort($notas, 'ordenaNotas');
// var_dump($notas);

// Ao invés de usar isso, pode-se usar uma função anônima:

usort($notas, function (array $nota1, array $nota2): int
{
    return $nota1['nota'] <=> $nota2['nota'];
});
var_dump($notas);