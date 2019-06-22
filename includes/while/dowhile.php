<?php

$total = 160;
$desconto = 0.9;

do {
    $total *= $desconto;
} while ($total > 100);

echo $total;

?>