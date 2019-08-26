<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title> Exercícios </title>
        <meta charset="utf-8">
    </head>
<body>


<div class="container">
    <fieldset>
        <legend> Calculo de valores </legend>
        <form action="#" method="post">

            <div class="form-group">
                <label> Informe o valor </label>
                <input type="number" step="1" name="vlr1" class="form-control">
            </div>

            <button type="submit" class="btn btn-dark"> Calcular! </button>

        </form>
    </fieldset>
</div>

<?php
    $valor1 = isset($_POST['vlr1']) ? $_POST['vlr1'] : 0;

    if($valor1 < 0){
        echo "O módulo de ($valor1) é: " . ($valor1 * -1);
    } else {
        echo "O módulo de ($valor1) é: " . ($valor1);
    };
?>




</body>
</html>






