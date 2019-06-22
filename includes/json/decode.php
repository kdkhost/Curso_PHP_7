<?php

$json = '[{"nome":"Juliana","idade":41}]';
    
$data = json_decode($json, true);

var_dump($data);

?>