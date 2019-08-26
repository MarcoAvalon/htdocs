<!DOCTYPE html>
<html lang="pt-br">
<head>
        <title> 15º </title>
        <meta charset="utf-8">
    </head>

<body>


<?php 
echo "<hr>";
echo "15)<br><br>";
$qhoras = 6;
$vhoras = 20;
$dias = 30;
$salario = $qhoras * $vhoras;
$sbruto = $salario * $dias;
$desconto = ($sbruto*10) /100;
$bruto = $sbruto - $desconto;

echo " Valor do salário Bruto é: $sbruto";
echo "<br><br>";
echo " O valor do salário com desconto do INSS é:$bruto";
echo "<hr>";
?>

</body>
</html>