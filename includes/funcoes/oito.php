<?php

function soma(int ...$valores):float{
	return array_sum($valores);
}

echo var_dump(soma(2, 2));
echo "<br>";
echo soma(25, 33);
echo "<br>";
echo soma(1.5, 2.5);
echo "<br>";
?>