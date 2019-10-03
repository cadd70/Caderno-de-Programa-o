<?php

class ContaCorrente {  // classe nova

    private $titular;

    private $agencia;

    private $numero;

    private $saldo;

    public function __construct($titular, $agencia, $numero, $saldo){

        $this->titular = $titular;
        $this->agencia = $agencia;
        $this->numero = $numero;
        $this->saldo = $saldo;

    }

    public function sacar($valor){

        $this->saldo = $this->saldo - $valor;
        return $this;

    }

    public function depositar($valor){

        $this->saldo = $this->saldo + $valor;
        return $this;

    }

    public function transferir($valor, ContaCorrente $contaCorrente){

        if(!is_numeric($valor)){

            echo "o valor passado não é numérico";

            exit;

        }

        $this->sacar($valor);

        $contaCorrente->depositar($valor);

        return $this;

    }

    public function __get($atributo){

        Validacao::protegeAtributo($atributo);
        return $this->$atributo;

    }

    public function __set($atributo, $valor){

        Validacao::protegeAtributo($atributo);
        $this->$atributo = $valor;

    }

    public function __toString(){
        return "Vc n pode fazer isso.";
    }


}

