<?php
    namespace Cliente;
    class Cadastro extends \Registro {
        public function registrarVendas(){
            echo "Foi Registrado uma venda para o cliente ".$this->getNome();
        }
    }
?>