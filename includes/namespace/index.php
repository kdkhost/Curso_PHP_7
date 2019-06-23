<?php
    require_once("config.php");

    use Cliente\Registro;

    $cad = new Registro();
    $cad->setNome("Marcelo");
    $cad->setEmail("contato@kdkhost.com.br");
    $cad->setSenha("admin123.");

    echo $cad;
?>