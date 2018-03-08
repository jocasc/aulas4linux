<?php



$host = "localhost";
$user = "lucas";
$pass = "@da4linux";
$db = "aula07";
/*
$conexao = mysqli_connect($host,$user,$pass,$db);


mysqli_query($conexao,"select * from posts");

*/


$conexao = mysqli_connect($host,$user,$pass,$db);

$query = "select * from posts";
$result = mysqli_query($conexao,$query);
echo"<pre>";
while ($row = mysqli_fetch_assoc($result)) {
	print_r($row);
	echo"<hr>";
}