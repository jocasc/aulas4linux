<?php 



$array = ["Lucas","4Linux","Joao"];

foreach ($array as $valor) {
	echo"$valor<br>";
}



echo"<br>";


$arrayPessoa = array
(
	'nome' => "Steve Jobs", 
	'idade' => 50, 
	'altura' => 1.77, 
	'peso' => 75, 
	'time' => "Curintia" 
	);


foreach ($arrayPessoa as $key => $value) {
	echo"$key: $value<br>";

}
echo"<br>";

$arrayPessoas = 
[
	'nome' => "Steve Jobs", 
	'idade' => 50, 
	'altura' => 1.77, 
	'peso' => 75, 
	'time' => "Curintia" 
	];

foreach ($arrayPessoas as $key => $value) {
	echo"$key: $value<br>";
}
 ?>