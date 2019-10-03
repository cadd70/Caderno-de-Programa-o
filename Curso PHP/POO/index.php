<?php

require_once "Validacao.php";  // chama a classe de outro arquivo

require_once "ContaCorrente.php";  // chama a classe de outro arquivo

$contaJoao = new ContaCorrente("Joao", "1212", "123321", 500.00);

$contaMaria = new ContaCorrente("Maria", "3212", "321321", 900.00);

// var_dump($contaJoao);

// var_dump($contaMaria);

// $contaJoao->transferir(20.00,$contaMaria);

// var_dump($contaJoao);

// var_dump($contaMaria);

