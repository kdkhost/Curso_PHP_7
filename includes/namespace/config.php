<?php

    spl_autoload_register(function($nameClasse){

        var_dump($nameClasse);

        $dirClass = "class";
        //$filename = $dirClass . DIRECTORY_SEPARATOR . $nameClasse . ".php";
        $filename = str_replace ("\\", "/",$dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php");

        if (file_exists($filename)){
            require_once($filename);
        }
    })

?>