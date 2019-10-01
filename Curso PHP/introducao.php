<?php

$idade = 10;

echo "oi, tenho $idade anos.\n"; // \n quebra de linha
echo PHP_EOL; // PHP_EOL end of line - quebra linha
echo "\tdaora a vida."; // \t tab

// \ é um escape

echo PHP_EOL;

if ($idade >= 18) {
    echo "maior de 18";
}

else {
    echo "menor de 18";
}