<!DOCTYPE html>
<html lang="pt-br">
<head>
        <title> Exercícios 3 </title>
        <meta charset="utf-8">
    </head>

<body>
<h4> Exercício 3</h3>

<?php 
echo "1º)<br>";
$nu1 = 10;
$nu2 = 20;
$rm = $nu1 * $nu2;
$rd = $nu2 / $nu1;
$ra = $nu2 + $nu1;
$rsu = $nu2 - $nu1;
$vm = $nu2 % $nu1;
echo "O valor da multiplicação é: $rm";
echo "<br> O valor da divisão é: $rd";
echo "<br> O valor da Adição é: $ra";
echo "<br> O valor da subtração é: $rsu";
echo "<br> O valor do modulo é: $vm";
echo "<hr>";

echo "2)<br>";


?>
  <form method="post" action="ordem.php"> 
                <h2>Informe três números (um em cada campo).</h2><input type="text" name="numeroum">
                <input type="text" name="numerodois">
                <input type="text" name="numerotres">
                <input type="submit" value="ok">
            </form>

<?php


?>
            
</body>
</html>