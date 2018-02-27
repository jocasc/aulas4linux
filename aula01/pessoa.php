<?php

echo"<h2>Pessoa</h2>";

$nome = "PHP";
$sobrenome = " da Silva";
$idade = 23;
$sexo = 'm';
$peso = 70;
$altura = 1.77;
$andando = false;



echo"O $nome $sobrenome ($sexo) possui $idade anos, tem $peso kg e $altura de altura.";

if($andando == true)
echo" Não estou andando nesse momento";
else
echo" Estou andando nesse momento";

?>