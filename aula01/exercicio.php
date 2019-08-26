<?php

# 1º
$numInteiro = 10;
$numReal = 20.3;

echo "<hr> 1) <br>";

echo "O valor inteiro $numInteiro e o valor real $numReal";

echo "<hr>";

# 2º 

$letraA = "a";
$letraB = "l";
$letraC = "u";
$letraD = "n";
$letraE = "o";
$letraF = "s";


echo " 2) <br>";

echo "A palavra é: $letraA$letraB$letraC$letraD$letraE$letraF";

echo "<hr>";

# 3º

$assinatura = 32;
$impulso = 0.09;
$chamada = 0.35;

$excedido = 254 - 90;

$fatura = $assinatura + ($excedido * $impulso) + ($chamada * 23);

echo "3) <br>";

echo "O valor da fatura é: $fatura <hr>";


# 4º

$num1 = 11;
$num2 = 19;
$num3 = 7;
$media =  ($num1+$num2+$num3)/3;

echo " 4) <br>";

echo "A média é: ". $media;

echo "<hr>";

# 5º

$nota1 = 8;
$nota2 = 7.5;
$nota3 = 10;
$nota4 = 9;

echo " 5) <br>";

echo "A média é: ". ($nota1*1 + $nota2*2 + $nota3*3 + $nota4*4)/(1+2+3+4);

echo "<hr>";

#  6º

$varA = 4;
$varB = 2;

echo " 6) <br>";

echo "A soma é: " .$varA += $varB;
echo "<br>A subtração é: " .$varA -= $varB;
echo "<br>A divisão é: " .$varA /= $varB;
echo "<br>A multiplicação é: " .$varA *= $varB;

echo "<hr>";

#  7º

$num = 2;

echo "7) <br>";

echo "O quadrado do número 2 é: " .($num ** $num);

echo "<hr>";

# 8º

$num = 2;

echo "8) <br>";

echo "O cubo do número 2 é: "  .($num ** 3);

echo "<hr>";

# 9º
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
    echo "A divisão dos valores é: " . ($valor01 / $valor02);
    echo "<br>O quadrado dos valores é: " . ($valor01 * $valor01); //pow(base, potencia)
    echo "<br>O cubo do primeiro valor é: " . ($valor02 * $valor02 * $valor02);
    }
?>

<?php

#  10º

$mod = 47;

echo "10) <br>";

echo "O resto do número 47 dividido por 2 é: " .$mod %= 2;

echo "<hr>";

#  11º

$num = 2;
echo "11) <br>";

echo "O número é: $num";
echo "<br>O antecessor do número é: " .($num-1);
echo "<br>O sucessor do número é: " .($num+1);

echo "<hr>";

#  12º

$real = 420;
$dolar = 4.2;
$conversao = $real / $dolar;

echo "12) <br>";
echo "A cotação do dolar é: $dolar<br>";
echo "R$ 420 em dolar são: $$conversao dolares <hr>";

# 13º

$valor = 100;
$reajuste = $valor*0.10;

echo "13) <br>";

echo "O valor é $valor <br>"; 
echo "O valor com reajuste fica: $reajuste <hr>";

# 14º

$salario = 1000;
$reajuste = 0.5;

$salarioReajuste = $salario + ($salario * $reajuste);

echo "14) <br>";

echo "O salário é: $salario<br>";
echo "O reajuste é: $reajuste<br>";
echo "O Salário com o reajuste é: $salarioReajuste <hr>";

# 15º

?>
<div class="container">
    <fieldset>
        <legend> Calculo de valores </legend>
        <form action="#" method="post">
            <div class="form-group">
                <label> Informe o salario/hora </label>
                <input type="number" step="1" name="salario" class="form-control">
            </div>

            <div class="form-group">
                <label> Informe a quantia de horas trabaljadas </label>
                <input type="number" step="1"   name="horas" class="form-control">
            </div>
          </form>
    </fieldset>
</div>
<div class="form-group">
                <label> Informe o percentual de desconto do INSS</label>
                <input type="number" step="1"   name="inss" class="form-control">
            </div>
            <button type="submit" class="btn btn-dark"> Calcular! </button>
        </form>
    </fieldset>
</div>

<?php


    $valor01 = isset($_POST['salario']) ? $_POST['salario'] : 0;
    $valor02 = isset($_POST['horas']) ? $_POST['horas'] : 0;
    $inss = isset($_POST['inss']) ? $_POST['inss'] : 0;

    if($salario1 != 0 && $horas1 != 0){
     echo "O salário líquido é: " . ($salario1 * $horas1) - (($salario1 * $horas1) * ($inss1 / 100));
    }


/*
$qhoras = 0;
$vhoras = 0;
$desconto = 0;
$pdesconto = 0;
$sbruto = 0;
$sliquido = 0;
if (isset($POST ["Enviar"])){
   $qhoras = ["qtdhora"];
   $vhoras = $POST["vhoras"];
   $pdesconto = $POST["desconto"];
   
   $sbruto = qhoras * $vhoras;
   // sb = 100
   // d = pdesconto
   $desconto = ($sbruto * $pdesconto) / 100;
   $sliquido = $sbruto - $desconto;*/
?>
