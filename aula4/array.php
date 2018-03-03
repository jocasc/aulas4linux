<?php

echo"<pre>";
$array = ["Lucas","4Linux","Joao"];
$array2 = array("Lucas","4Linux","Joao");


print_r($array[1]);
echo"<br>";
var_dump($array2[1]);


$arrayPessoa = array
(
	'nome' => "Steve Jobs", 
	'idade' => 50, 
	'altura' => 1.77, 
	'peso' => 75, 
	'time' => "Curintia" 
	);


echo"valor nome ".$arrayPessoa['nome'][0];
echo"<br>";

var_dump($arrayPessoa);

print_r($arrayPessoa['nome']);
echo"<br>";
print_r($arrayPessoa['idade']);
echo"<br>";
echo 'teste '.$arrayPessoa['nome'];


echo"<br><br>testando ";
print_r($arrayPessoa['nome']);
echo"<br>";
print_r($arrayPessoa);
?>

