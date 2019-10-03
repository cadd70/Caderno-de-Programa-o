<?php

                                                    //   : array a função deve devolver um array
function sacar (array $conta, float $valorASacar) : array {  // informa que o tipo de dado conta tem que ser array e que o tipo de valor é float
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem("Você não pode sacar.");
    } else {
        $conta['saldo'] -= $valorASacar;
        exibeMensagem ($conta['titular'] . " sacou " . $valorASacar);
    }
    return $conta;     // função tem retorno de valor  |  subrotina só roda código
}

function depositar (array $conta, float $valorADepositar) : array {
    if ($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
        exibeMensagem ($conta['titular'] . " depositou " . $valorADepositar);
    } else {
        exibeMensagem("Deposite algum valor.");
    }
    return $conta;
}

function titularComLetrasMaiusculas(array &$conta) // &$conta passagem por referência
{
    $conta['titular'] = mb_strtoupper($conta['titular']);
}

function exibeMensagem (string $mensagem) {   // função tem retorno de valor  |  subrotina só roda código
    echo $mensagem . PHP_EOL;
}
