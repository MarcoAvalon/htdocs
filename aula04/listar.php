<?php include './header.php'?>

    <h1> Listagem </h1>
    <div class="container mt-3">
        <table class="table table-stripper table-houver text-center ">
            <thead>
            <!-- Estrutura de repetição -->
                 <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Quantidade</th>
                    <th>Preço</th>
                    <th>Imagem</th>
                    <th colspan="2">Editar</th>
                </tr>
            </thead>
            <tbody>
            <!-- Estrutura de repetição -->
<?php
    $lista = array(
        "prod1" => array(
            "id" => 1,
            "nome" => "caneta",
            "quantidade" => "100 un.",
            "preço" => 10.90,
            "imagem" => "#"
        ),
        "prod2" => array(
            "id" => 2,
            "nome" => "lapis",
            "quantidade" => "250 un.",
            "preço" => 3.20,
            "imagem" => "#",

        ),
        "prod3" => arrey(
            "id" => 3,
            "nome" => "borracha",
            "quantidade" => "500 un.",
            "preço" => 0.80,
            "imagem" => "#"

        ),
    );
    ?>
            <?php for($i = 0; $i < sizeof($lista); $i++) : ?>
                <tr>
                    <td><?= $i + 1 ?></td>
                    <td><?= $lista[$i]['nome']?></td>
                    <td><?= $lista[$i]['quantidade']?></td>
                    <td><?= $lista[$i]['preco']?></td>
                    <td><a href="#"> <i class="fa fa-address-book" aria-hidden="true"></i></a></td>
                    <td><a href="#"> Editar</a></td>
                    <td><a href="#"> Excluir</a></td>
                </tr>
<?php endfor; ?>
            <tbody>
        </table>
    </div>
    

<?php include './footer.php'?>