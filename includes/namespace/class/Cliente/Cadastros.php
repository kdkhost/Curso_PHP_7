<?php
    namespace Cliente;
    class Cadastros extends \Cadastros {
        public function registrarVendas(){
            echo "Foi Registrado uma venda para o cliente ".$this->getName();
        }
    }
?>