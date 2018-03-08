<?php 

$host = "localhost";
$port = "5432";
$dbname = "aula08";
$user = "lucas";
$pass = "123";

$con_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$pass}";


$con = pg_connect($con_string);
/*
$sql = "insert into usuarios(usuario,senha) values ('joao','456')";

pg_query($sql);

*/

$sql = "select * from usuarios";
echo"<pre>";
$result = pg_query($con,$sql);
$usuarios = pg_fetch_all($result);
print_r($usuarios);



echo"<ul>";
foreach ($usuarios as $usuario) {
	echo"<li>{$usuario['usuario']}</li>";
	}

echo"</ul>";

 ?>