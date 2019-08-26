<?php

/*
    Operadores aritméticas de atribuição
    += acumula o valor de uma variável SOMANDO-A de um valor
    -= acumula o valor de uma variável SUBTRAINDO-A de um valor
    *= acumula o valor de uma variável MULTIPLICANDO-A de um valor
    /= acumula o valor de uma variável DIVIDINDO-A de um valor
    %= acumula o valor de uma variável somando com o resto de sua divisão por um outro valor dividindo-a de um valor
    ++ incrementador (soma +1 ao valor da variável)
    -- decrementador (subtrai -1 ao valor da variável)
    
*/
# atribuição (multiplicar)
// exemplo: x *=y
// declaração de variável
$x = 10;
// forma normal
$x = $x * 5;
// forma simplificada ( atribuição com multiplicar)
$x *= 5;
//imptressão
echo $x;

echo " <br><br><br>";

# atribuição (divisão)
    // exemplo: x /=y
    // declaração de variável
    $y = 10;
    // forma normal
    $y = $y / 5;
    // forma simplificada ( atribuição com multiplicar)
    $y /= 5;
    //impressão
    echo $y;

    echo "<br><br><hr><br><br>";

    # atribuição (soma)
    // exemplo: x +=y
    // declaração de variável
    $z = 10;
    // forma normal
    $z = $z + 5;
    // forma simplificada ( atribuição com multiplicar)
    $z += 5;
    //impressão
    echo $z;

    echo "<br><br><hr><br><br>";

    # incrementador
    // exemplo: x++ ou ++x
    // declaração de variável
    $a = 18;

    // operação de incrementação
    $a++; // $a += 1; --> $a = $a + 1;
    ++$a;
    
    // impressão
    echo $a;

    ## 2º exemplo
    $b = 3;
    $c = $b++;
    $d = ++$b;

    echo $b;
    echo "<br>$c";
    echo "<br>$d";




?>