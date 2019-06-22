<?php

interface veiculo {
    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
}

class Civic implements veiculo {
    public function acelerar($velocidade)
    {
        echo "O Veículo Acelerou até " . $velocidade . " km/h";
    }

    public function frenar($velocidade)
    {
        echo "O Veículo frenou até " . $velocidade . " km/h";
    }

    public function trocarMarcha($marcha)
    {
        echo "O Veículo engatou a marcha " . $marcha;
    }

}

$carro = new Civic();
$carro->trocarMarcha(1);

?>