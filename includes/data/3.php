<?php
// %A = Dia da Semana Atual
// %e ou %d = Dia Atual
// %B = Mês Atual
// %Y = Ano Atual

// ucwords = Deixar a Primeira Letra Maiúscula
// setlocale = Converter a data e moeda para o idoma do local acessado

//setlocale(LC_ALL, "pt_BR.utf-8", "portuguese");
//setlocale(LC_ALL, "portuguese");

date_default_timezone_set('America/Sao_Paulo');
setlocale(LC_ALL, array('pt_BR.utf-8','es_US.utf-8','es_ES','es_ES.utf-8'));
echo ucwords(strftime("%A %d %B %Y"));

?>