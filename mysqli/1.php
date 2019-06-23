<?php
//** conectando o mysqli */

$conn = new mysqli("localhost", "usuario", "senha", "nome_do_banco" );
if ($conn->connect_error){
    echo "Error: " .$conn->connect_error;
}

?>