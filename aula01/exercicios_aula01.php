<?php

echo"<h2>Seis variáveis tipagens diferentes</h2>";
echo"<pre>";
$nome = "Professor";
var_dump($nome);
$idade = 24;
var_dump($idade);
$peso = 72.4;
var_dump($peso);
$questao = true;
var_dump($questao);
$meu_array[] = 0;
var_dump($meu_array); 
$meu_objeto = new stdClass;
var_dump($meu_objeto);
echo"</pre>";
echo"<h2>Constante</h2>";
echo"<pre>";
const CARRO = "fusca";

echo CARRO;
echo"</pre>";




?>