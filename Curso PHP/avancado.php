<?php

$umArray = [10,20,30];

echo $umArray[0]; // mostrar o item do índice

echo PHP_EOL;

echo count ($umArray);

echo PHP_EOL;
echo PHP_EOL;

$contasCorrente = [
    45654 => [
        'titular' => 'Vinicius',
        'saldo' => '1000'
    ],
    65456 => [
        'titular' => 'Maria',
        'saldo' => '10000'
    ],
    45889 => [
        'titular' => 'Alberto',
        'saldo' => '300'
    ]
];

echo $contasCorrente[45654]['titular'] . PHP_EOL; // chamar informacoes aninhadas 

echo PHP_EOL;

$contasCorrente[11113] = [   // incluir um item no array
    'titular' => 'Angelo',
    'saldo' => '5000'
];

foreach ($contasCorrente as $cpf => $conta) {
    echo $cpf . " = " . $conta['titular'] . PHP_EOL;
}