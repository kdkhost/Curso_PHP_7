<?php
class Pessoa {
    public $nome = "Rasmos Lerdorf";
    protected $idade = 48;
    private $senha = "790801";

    public function verDados(){
        echo $this -> nome . "<br/>";
        echo $this -> idade . "<br/>";
        echo $this -> senha . "<br/>";
    }
}
$objeto = new Pessoa();
//echo $objeto->nome . "<br/>";
$objeto -> verDados();
?>