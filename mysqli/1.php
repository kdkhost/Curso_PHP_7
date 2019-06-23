<?php
//** conectando o mysqli */

$conn = new mysqli("localhost", "php7transferenci_udemy", "udemy2019.", "php7transferenci_udemy" );
if ($conn->connect_error){
    echo "Error: " .$conn->connect_error;
}

?>