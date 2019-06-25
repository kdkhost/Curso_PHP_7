<?php 
require_once("config.php");

$sql = new Lipe();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
?>