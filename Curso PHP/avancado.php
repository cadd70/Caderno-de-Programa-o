<?php

$umArray = [10,20,30];

echo $umArray[0]; // mostrar o item do índice

echo PHP_EOL;

echo count ($umArray);

echo PHP_EOL;

require_once 'funcoes.php';   // chama outro arquivo, include também funciona mas se o nome estiver errado ele ignora e roda o resto do codigo
//  require chama todas as vezes, o once só uma

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


$contasCorrente['65456'] = sacar($contasCorrente['65456'], 500);

$contasCorrente['45889'] = depositar($contasCorrente['45889'], -500);

unset ($contasCorrente['11113']);

titularComLetrasMaiusculas($contasCorrente['65456']);


foreach ($contasCorrente as $cpf => $conta) {
    exibeMensagem (
        // $cpf . " = " . $conta['titular'] . " = " . $conta['saldo'] também funciona
        "$cpf = {$conta['titular']} = {$conta['saldo']}"
    );
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daora a vida.</title>
</head>
<body>
    <h1>Contas Corrente</h1>

    <ul>
        <?php foreach($contasCorrente as $cpf => $conta) { ?>
        <li> <h3> <?= ("{$conta['titular']} - $cpf - Saldo: {$conta['saldo']};") ?></h3></li>
        <?php } ?>
    </ul>
</body>
</html>