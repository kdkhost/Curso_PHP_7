<?php
    namespace Cliente;
    class Cadastrar extends \Cadastro {
        public function registrarVendas(){
            echo "Foi Registrado uma venda para o cliente ".$this->getName();
        }
    }
?>