<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title> Exercícios 1 </title>
        <meta charset="utf-8">
    </head>
   
<body>
<?php
echo " 1)<br>";
$numInteiro = 10;
$numReal = 20.3;
echo "<br>";
echo "O valor inteiro $numInteiro e o valor real $numReal";
echo " 2<br><br>";
# Questão 2 
$letraA = "a";
$letraB = "l";
$letraC = "u";
$letraD = "n";
$letraE = "o";
$letraF = "s";
echo " 2) <br>";
echo "A palavra é: $letraA$letraB$letraC$letraD$letraE$letraF";
echo " <br><br>";
# Questão 3
$assinatura = 32;
$impulso = 0.09;
$chamada = 0.35;
$excedido = 254 - 90;
$fatura = $assinatura + ($excedido * $impulso) + ($chamada * 23);
echo "3) <br>";
echo "O valor da fatura é: $fatura";
echo"<br><br>";
# Questão 4
$num1 = 11;
$num2 = 19;
$num3 = 7;
$media =  ($num1+$num2+$num3)/3;
echo " 4) <br>";
echo "A média é: ". $media;
echo "<br><br>";
# Questão 5
$nota1 = 8;
$nota2 = 7.5;
$nota3 = 10;
$nota4 = 9;
echo " 5) <br>";
echo "A média é: ". ($nota1*1 + $nota2*2 + $nota3*3 + $nota4*4)/(1+2+3+4);
echo "<br><br>";
# Questão 6
$varA = 4;
$varB = 2;
echo " 6) <br>";
echo "A soma é: " .$varA += $varB;
echo "<br>A subtração é: " .$varA -= $varB;
echo "<br>A divisão é: " .$varA /= $varB;
echo "<br>A multiplicação é: " .$varA *= $varB;
echo "<br><br>";
# Questão 7
$num = 2;
echo "7) <br>";
echo "O quadrado do número 2 é: " .($num ** $num);
echo "<br><br>";
# Questão 8
$num = 2;
echo "8) <br>";
echo "O cubo do número 2 é: "  .($num ** 3);
echo "<br><br>";
# Questão 9
echo "9)";
?>

<div class="container">
    <fieldset>
        <legend> Calculo de valores </legend>
        <form action="#" method="post">
            <div class="form-group">
                <label> Informe o primeiro valor </label>
                <input type="number" step="1" name="valor01" class="form-control">
            </div>

            <div class="form-group">
                <label> Informe o segundo valor </label>
                <input type="number" step="1"   name="valor02" class="form-control">
            </div>
            <button type="submit" class="btn btn-dark"> Calcular! </button>
        </form>
    </fieldset>
</div>

<?php

    $valor01 = isset($_POST['valor01']) ? $_POST['valor01'] : 0;
    $valor02 = isset($_POST['valor02']) ? $_POST['valor02'] : 0;
    if($valor01 != 0 && $valor02 != 0){
    
    
    echo "9) <br> A divisão dos valores é: " . ($valor01 / $valor02);
    echo "<br>O quadrado dos valores é: " . ($valor01 * $valor01); // pow(base, potencia); pow($valor01,2) //
    echo "<br>O cubo do primeiro valor é: " . ($valor02 * $valor02 * $valor02); // pow(base, potencia); pow($valor02,3) //
    echo "<br><br>";
    }
?>

<?php
# Questão 10
echo "<br><br>";
$mod = 47;
echo "10) <br>";
echo "O resto do número 47 dividido por 2 é: " .$mod %= 2;
echo "<br><br>";
# Questão 11
$num = 2;
echo "11) <br>";
echo "O número é: $num";
echo "<br>O antecessor do número é: " .($num-1);
echo "<br>O sucessor do número é: " .($num+1);
echo "<br><br>";
# Questão 12
$real = 420;
$dolar = 4.2;
$conversao = $real / $dolar;
echo "12) <br>";
echo "A cotação do dolar é: $dolar<br>";
echo "R$ 420 em dolar são: $$conversao dolares <br><br>";
# Questão 13
$valor = 100;
$reajuste = $valor*0.10;
echo "13) <br>";
echo "O valor é $valor <br>"; 
echo "O valor com reajuste fica: $reajuste <br><br>";
# Questão 14
$salario = 1000;
$reajuste = 0.5;
$salarioReajuste = $salario + ($salario * $reajuste);
echo "14) <br>";
echo "O salário é: $salario<br>";
echo "O reajuste é: $reajuste<br>";
echo "O Salário com o reajuste é: $salarioReajuste <br><br>";
# Questão 15
?>

<div class="container">
    <fieldset>
        <legend> Calculo de valores </legend>
        <form action="#" method="post">

            <div class="form-group">
                <label> Informe o salário/hora </label>
                <input type="number" step="1" name="sal" class="form-control">
            </div>

            <div class="form-group">
                <label> Informe a quantidade de horas trabalhadas </label>
                <input type="number" step="1" name="hor" class="form-control">
            </div>

            <div class="form-group">
                <label> Informe o percentual de desconto do INSS </label>
                <input type="number" step="1" name="inss" class="form-control">
            </div>

            <button type="submit" class="btn btn-dark"> Calcular! </button>

        </form>
    </fieldset>
</div>

<?php
    $salario1 = isset($_POST['sal']) ? $_POST['sal'] : "";
    $horas1 = isset($_POST['hor']) ? $_POST['hor'] : "";
    $inss1 = isset($_POST['inss']) ? $_POST['inss'] : "";

    if($salario1 != 0 && $horas1 != 0 && $inss1 != 0){
        echo "O salário líquido é: " . (($salario1 * $horas1) - (($salario1 * $horas1) * ($inss1 * 0.01)));
    };

    echo "<hr>";
?>
</html>





?>