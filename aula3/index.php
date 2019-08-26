<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>site em PHP</title>
    

              <!-- CDN CSS bootstrap-->

              <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <div class=" container d-flex justify-content-center">
        <div class="wrapper">
            <h2 class="mb-5 mt-3">Desenvolvimento de site com PHP </h2>
                <div class=" row">
                    <div class="jumbotron">
                        <h3> vantagem de desenvolver com o PHP </h3>
                        <ul>
                            <li>Praticidade </li>
                            <li>Flexibilidade </li>
                            <li>Reutilização</li>
                            <li>Sites dimâmicos</li>
                            <li>Facilidade de integração com outras tecnologias</li>
                        </ul>
            </div>
            </div>
         <div class="row bg-secondary p-2 text-white">
            <fieldset>
            <form action="#" method="post">
                <div class="form-group">
                    <label for="id_nome"> nome </label>
                    <input type="text" class="form-control" placehoider="informe o nome" reqired id="id_nome" name="txtNome">
                    </div>
                    <div class="form-group">
                    <label for="id_email"> email </label>
                    <input type="email" class="form-control" placehoider="informe o email" reqired id="id_email" name="txtEmail">
                    </div>
                    <button type="submit" class="btn btn-dark"> enviar</button>
                    </form>
            </fieldset>
            </div>

                    <p> Nome: <?= (isset($_POST['txtNome']) && !empty ($_POST['txtNome'])) ? $_POST ['txtNome'] : "" ?></p>
                    <p> Email: <?= isset($_POST['txtEmail']) ? $_POST ['txtEmail'] : ""?></p>



            </div>
        </div>
    </div>
</body>
</html>
