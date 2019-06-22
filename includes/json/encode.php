<?php

$pessoas = array();
array_push($pessoas, array(
    'nome'=>'Marcelo',
    'idade'=>40
    ));

$pessoas = array();
array_push($pessoas, array(
    'nome'=>'Juliana',
    'idade'=>41
    ));
    
echo json_encode($pessoas);

?>