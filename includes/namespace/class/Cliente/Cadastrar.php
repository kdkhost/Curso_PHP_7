<?php
    namespace Cliente;
    class Cadastrar extends \Cadastrar {
        public function registrarVendas(){
            echo "Foi Registrado uma venda para o cliente ".$this->getNome();
        }
    }
?>