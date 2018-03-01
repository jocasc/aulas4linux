<?php

echo"1. Crie duas variáveis <i>a e b</i>, atribua valores numéricos a ela";

$a = 10;
$b = 20;

echo"<br>valor A $a e valor $b";

echo"<br><br>2. Crie uma variável com o valor da soma das variáveis anteriores";
$soma = $a + $b;
echo"<br>A soma dos dois valores é: $soma";


echo"<br><br>3. Crie uma variável com o valor da subtração das variáveis anteriores";
$subtração = $a - $b;
echo"<br>A subtração dois dois valores é: $subtração";

echo"<br><br>4. Crie uma variável com o valor da divisão das variáveis anteriores";
$divisao = $a / $b;
echo"<br>A divisão dos dois valores é: $divisao";

echo"<br><br>5. Crie uma variável com o valor da multiplicação das variáveis anteriores";
$multiplicacao = $a * $b;
echo"<br>A multiplicação dos dois valores é: $multiplicacao";

echo"<br><br>6. Crie uma variável com o valor da módulo(resto da divisão) das variáveis anteriores";
$modulo = $a % $b;
echo"A módulo das duas variáves é: $modulo";

echo"<h3>Operadores de atribuição, incremento e decremento</h3>";

echo"1. Crie uma variável num com uma valor numérico(Pode ser qualquer valor)";
$num = 35;
echo"<br>O valor de <i>num</i> é: $num";

echo"<br><br>2. Use um operador de atruibuição e some o valor 5 a variavel, exiba o valor atual da variavel";
$num += 5;
echo"<br>Atribuindo o valor 5 a variável <i>num</i>: $num"; 

echo"<br><br>3. Use um operador de atruibuição e subtraia o valor 3 a variavel, exiba o valor atual da variavel";
$num -= 3;
echo"<br>Subtraindo 3 da variável <i>num</i>: $num";

echo"<br><br>4. Use um operador de atruibuição e multiplique o valor 10 a variavel, exiba o valor atual da variavel<br>";
$num *= 10;

echo"Multiplicando 10 a variável <i>num</i>: $num";

echo"<br><br>5. Use um operador de atruibuição e divida o valor 2 a variavel, exiba o valor atual da variavel<br>";
$num /= 2;

echo"Dividindo a variável <i>num</i> por 2: $num";

echo"<br><br>6. Crie uma variavel cont = 0, utilize o operador de incremento até o valor da variavel ser 10 sempre exibindo o valor da variavel<br>";
$cont = 0;

while ($cont <= 10)
{
	echo"$cont";
	$cont++;
}

echo"<br><br>7. Crie uma variavel cont = 100, utilize o operador de decremento até o valor da variavel ser 89 sempre exibindo o valor da variavel<br>";
$cont = 100;

while ($cont >= 89)
{
	echo"$cont - ";
$cont--;
}

echo"<h3>Operadores Relacionais</h3>";
echo"1. Crie duas variáveis num1 e num2, atribua valores quaisquer a elas<br>";
$num1 = 25;
$num2 = 40;
echo"Valor da variável <i>num1</i> $num1 e da variável <i>num2</i> $num2<br>";
echo"<br>2. Utilize os operadores relacionais e verifique se as variáveis são iguais, utilize a função var_dump() para exibir o resultado<br>";
var_dump($num1 == $num2);
echo"<br><br>3. Utilize os operadores relacionais e verifique se as variáveis são idênticas, utilize a função var_dump() para exibir o resultado<br>";
var_dump($num1 === $num2);

echo"<br><br>4. Utilize os operadores relacionais e verifique se as variáveis são diferentes, utilize a função var_dump() para exibir o resultado<br>";
var_dump($num1 <> $num2);

echo"<br><br>5. Atribua valores númericos as variáveis para os próximos exercícios<br>";

echo"<br>6. Utilize os operadores relacionais e verifique se num1 é maior que num2, utilize a função var_dump() para exibir o resultado<br>";
var_dump($num1 > $num2);

echo"<br><br>7. Utilize os operadores relacionais e verifique se num1 é menor que num2, utilize a função var_dump() para exibir o resultado<br>";
var_dump($num1 < $num2);

echo"<br><br>8. Utilize os operadores relacionais e verifique se num1 é maior ou igual que num2, utilize a função var_dump() para exibir o resultado<br>";
var_dump($num1 >= $num2);

echo"<br><br>9. Utilize os operadores relacionais e verifique se num1 é menor ou igual que num2, utilize a função var_dump() para exibir o resultado<br>";
var_dump($num1 <= $num2);

echo"<h3>Operadores lógicos</h3>";

echo"1. Crie duas variáveis booleanas, a e b";
$a = true;
$b = true;
echo"<br>Variável a = $a e variável b = $b";











?>