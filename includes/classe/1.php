<?php

class Pessoa {
    public $nome; //Atributo
    public function falar(){ //Método
        return "O Meu Nome é ".$this->nome;
    }
}

$Marcelo = new Pessoa();
$Marcelo->nome = "Marcelo-Brad";
echo $Marcelo->falar();

?>