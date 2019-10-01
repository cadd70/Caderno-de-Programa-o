<?php

$idade = 20;
$numeroDePessoas = 1;

echo "oi, tenho $idade anos.\n"; // \n quebra de linha
echo PHP_EOL; // PHP_EOL end of line - quebra linha
echo "\tdaora a vida."; // \t tab

// \ é um escape

echo PHP_EOL;

if ($idade >= 18) {  // $idade > 18 || $idade == 18 também funciona, or no lugar de || também funciona
    echo "maior de 18";
}

else if ($idade >= 16 && $numeroDePessoas > 1) {
    echo "menor de 18 acompanhado";
}

else {
    echo "menor de 18";
}

echo PHP_EOL;


// operador ternario ?

// $variavel = $condicao ? $valorSeVerdadeiro : $valorSeFalso;

$mensagem = $idade < 18 ? "Você é menor de idade" : "Você é maior de idade";
echo $mensagem;

echo PHP_EOL;
echo PHP_EOL;


$contador = 1;

while ($contador <= 15) {  // enquanto
        echo "#$contador" . PHP_EOL;
        $contador = $contador + 1;
}

echo PHP_EOL;

for ($contador = 1; $contador <= 15; $contador = $contador + 1) {  // para (essas instruções) {executa esse bloco}
    echo "#$contador" . PHP_EOL;               // podemos usar += 1 ou ++ - o +=1 adiciona um valor numerico mesmo
}
// break para o codigo e continue pula uma iteracao
echo PHP_EOL;


