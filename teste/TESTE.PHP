<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title> Exercicios 2</title>
    <meta charset="utf-8">
</head>

<body>
    <h3> 1º </h3>

    <legend> Calculo de valores </legend>
    <form action="#" method="post">
        <div class="form-group">
            <label> Informe o valor </label>
            <input type="number" step="1" name="va01" class="form-control">
        </div>
        <button type="submit" class="btn btn-dark"> Verificar! </button>
    </form>

    </div>

    <?php
    $va01 = isset($_POST['va01']) ? ($_POST['va01']) : 0;
    if ($va01 < 0) {
        echo "o modulo do é: " . ($va01 * -1);
    } else {
        echo "O modulo do {$va01} é: " . $va01;
    };

    ?>

    <h3> 2º </h3>

    <legend> Calculo de valores </legend>
    <form action="#" method="post">
        <div class="form-group">
            <label> Informe o valor </label>
            <input type="number" step="1" name="num" class="form-control">
        </div>
        <button type="submit" class="btn btn-dark"> Verificar! </button>
    </form>


    <?php
    $num = isset($_POST['num']) ? ($_POST['num']) : 0;
    if ($num % 2 == 0) {
        echo "o numero {$num} é par ";
    } else {
        echo "O numero {$num} é impar";
    };

    ?>

    <h3> 3º </h3>

    <legend> Calculo de valores </legend>
    <form action="#" method="post">
        <div class="form-group">
            <label> Informe o valor </label>
            <input type="number" step="1" name="num1" class="form-control">
        </div>
        <div class="form-group">
            <label> Informe o valor </label>
            <input type="number" step="1" name="num2" class="form-control">
        </div>
        <button type="submit" class="btn btn-dark"> Verificar! </button>
    </form>


    <?php
    if ($num1 = isset($_POST['num1']) && ($_POST['num1'] != 0) && isset($_POST['num2'])) {
        $num1 = ($_POST['num1']);
        $num2 = ($_POST['num2']);
        echo "O primeiro numero é {$num1} e o segundo é {$num2} <br>";
        if ($num1 % $num2 == 0) {
            echo "O {$num1} é multiplo do {$num2}";
        } else {
            echo "O {$num1} não é multiplo do {$num2}";
        };
    }
    ?>

    <h3> 4º </h3>

    <legend> Calculo de valores </legend>
    <form action="#" method="post">
        <div class="form-group">
            <label> Informe o valor </label>
            <input type="number" step="1" name="q4" class="form-control">
        </div>
        <button type="submit" class="btn btn-dark"> Verificar! </button>
    </form>


    <?php
    $q4 = isset($_POST['q4']) ? ($_POST['q4']) : 0;
    if ($q4 < 0) {
        echo "O {$q4} é negativo.";
    }
    if ($q4 > 0) {
        echo "O {$q4} é positivo.";
    } else {
        echo "O {$q4} é zero.";
    };
    ?>

    <h3> 5º </h3>

    <legend> Calculo de valores </legend>
    <form action="#" method="post">
        <div class="form-group">
            <label> Informe o valor </label>
            <input type="number" step="1" name="q5" class="form-control">
        </div>
        <button type="submit" class="btn btn-dark"> Verificar! </button>
    </form>


    <?php
    $q5 = isset($_POST['q5']) ? ($_POST['q5']) : 0;
    if ($q5 = 5 <=> 20) {
        echo "O número {$q5} esta entre 5 e 20";
    } else {
        echo "O número {$q5} não esta entre 5 e 20";
    };
    ?>

    <h3> 6º </h3>

    <legend> Calculo de valores </legend>
    <form action="#" method="post">
        <div class="form-group">
            <label> Informe o valor </label>
            <input type="number" step="1" name="x" class="form-control">
        </div>
        <div class="form-group">
            <label> Informe o valor </label>
            <input type="number" step="1" name="y" class="form-control">
        </div>
        <button type="submit" class="btn btn-dark"> Verificar! </button>
    </form>


    <?php
    $x = isset($_POST['x']) ? ($_POST['x']) : 0;
    $y = isset($_POST['y']) ? ($_POST['y']) : 0;
    if ($x > $y) {
        echo "{$x} > {$y}, então a adição deles é: " . ($x + $y);
    } else {
        echo "{$x} < {$y}, então a multiplicação deles é: " . ($x * $y);
    };
    ?>

    <h3> 7º </h3>

    <legend> Calculo de valores </legend>
    <form action="#" method="post">
        <div class="form-group">
            <label> Informe o valor </label>
            <input type="number" step="1" name="q7" class="form-control">
        </div>
        <div class="form-group">
            <label> Informe o valor </label>
            <input type="number" step="1" name="q71" class="form-control">
        </div>
        <button type="submit" class="btn btn-dark"> Verificar! </button>
    </form>


    <?php
    $q7 = isset($_POST['q7']) ? ($_POST['q7']) : 0;
    $q71 = isset($_POST['q71']) ? ($_POST['q71']) : 0;

    if ($q7 > $q71) {
        echo "O {$q7} é maior que o {$q71}.";
    }
    if ($q7 = $q71) {
        echo "Os números são iguais";
    } else {
        "O {$q71} é maior que o {$q7}.";
    };
    ?>

    <h3> 8º </h3>

    <legend> Calculo de valores </legend>
    <form action="#" method="post">
        <div class="form-group">
            <label> Informe o ano </label>
            <input type="number" step="1" name="q8" class="form-control">
        </div>
        <button type="submit" class="btn btn-dark"> Verificar! </button>
    </form>


    <?php
    $q8 = isset($_POST['q8']) ? ($_POST['q8']) : 0;
    if ($q8 / 4) {
        echo "O ano é bisexto.";
    } else {
        echo "O ano não é bisexto";
    }
    ?>
</body>

</html>