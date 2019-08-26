<?php include './header.php' ?>
<div class="cotainer mt3">
<fieldset>
<legend>Formulário de Cadastro</legend>
<form>
  <div class="form-group">
    <label for="idnome">Nome</label>
    <input type="txt" id="idnome" name="txtNome" placeholder="Informa o nome" class="form-control" required>
    </div>

    <div class="form-group">
    <label for="idqtd">Quantidade</label>
    <input type="number" id="idqtd" name="txtQtd" placeholder="Informa a quantidade" class="form-control" required>
    </div>
    
    <div class="form-group">
    <label for="idpreco">Preço</label>
    <input type="number" mim="0.0" max="99.99" step="0.10" id="preco" name="txtNome" placeholder="Informa o nome" class="form-control" required>
    </div>
    
    <div class="form-group">
    <label for="idnome">Nome</label>
    <input type="submit" id="idnome" name="txtNome" placeholder="Informa o nome" class="form-control" required>
    </div>


</fieldset>

</div>
<h1> CADASTRAR </h1>
<?php include './footer.php' ?>