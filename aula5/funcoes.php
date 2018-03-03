<?php	

// funcao para retornar se o numero e par ou impar

function par_impar($valor)
{

	if($valor % 2 == 0)
		echo"esse valor é par";
    else
    	echo"esse valor é impar";
}




// funcao que receba dois numeros e retorne o maior

function maiorMenor($valorA,$valorB)
{

if($valorA > $valorB)
	echo"$valorA é o maior valor";
else
	echo"$valorB é o maior valor";
}


// funcao que receba um idade e retorne se e maior de idade
function maiorIdade($idade)
{
	if($idade >= 18)
		echo"O usuário é <strong>maior</strong> de idade";
	else
		echo"O usuário é <strong>menor</strong> de idade";
}


// funcao que receba um array com informacoes de uma pessoa e diga se ela pode dirigir
// pessoa = ['nome','idade','temHabilitacao']




par_impar(13);

echo"<br>";
maiorMenor(900,450);
echo"<br>";
maiorIdade(18);
echo"<br>";




?>