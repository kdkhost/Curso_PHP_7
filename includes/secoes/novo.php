<?php
session_id('5fcd277ccf4c12764fca574d06ba044');
require_once("config.php");
session_regenerate_id();
echo session_id();
var_dump($_SESSION);

?>