<?php

class Validacao {

    public static function protegeAtributo($atributo){

        if($atributo == "titular" || $atributo == "saldo"){
            // return false;
            echo ("O atributo é privado.") . PHP_EOL;
         }
 
    }

}

?>