<?php
    namespace Cliente;
    class Cadastro extends \Registros {
        public function registrarVendas(){
            echo "Foi Registrado uma venda para o cliente ".$this->getNome();
        }
    }
?>