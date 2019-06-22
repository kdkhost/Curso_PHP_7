<?php

class Carro{
    private $modelo;
    private $motor;
    private $ano;

    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($modelo){
        $this->modelo = $modelo;
    }

    public function getMotor():float{
        return $this->motor;
    }
    public function setMotor($motor){
        $this->motor =$motor;
    }

    public function getAno():int{
        return $this->ano;
    }
    public function setAno($ano){
        $this->ano =$ano;
    }
    public function exibe(){
        return array(
            "modelo"=>$this->getModelo(),
            "motor"=>$this->getMotor(),
            "ano"=>$this->getAno()
        );
    }
}

$gol = new carro();
$gol->setModelo("Gol GTS");
$gol->setMotor("2.0");
$gol->setAno("2010");

var_dump($gol->exibe());
?>