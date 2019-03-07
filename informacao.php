<!DOCTYPE html>
<html>
<head>
<?php require_once('sidebar.php');?>
<title>Informações</title>
</head>


		<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
<br>
<h2> Informações da Pizzaria </h2>
      <form>
        <br>
<div class="form-row">
  <div class="form-group col-md-4">
    <label for="inputEmail4">Nome da Pizzaria</label>
    <input type="text" class="form-control" id="inputEmail4" placeholder="Ex: Pizzaria Bom Sabor">
  </div>
  <div class="form-group col-md-6">
    <label for="inputAddress">Cidade</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Ex: São Paulo">
  </div>
    </div>
  <div class="form-row">
  <div class="form-group col-md-4">
    <label for="inputPassword4">Localização</label>
    <input type="textd" class="form-control" id="inputPassword4" placeholder="Ex: Rua B">
  </div>

<div class="form-group col-md-2">
  <label for="inputAddress">N°</label>
  <input type="text" class="form-control" id="inputAddress" placeholder="Ex: 105">
</div>

<div class="form-group col-md-4">
  <label for="inputAddress2">Bairro</label>
  <input type="text" class="form-control" id="inputAddress2" placeholder="Ex : Bairro Conceição">
</div>

</div>

<div class="form-row">
  <div class="form-group col-md-4">
    <label for="inputCity">Telefone</label>
    <input type="text" class="form-control" id="inputCity" placeholder="Ex: (75)90000-0000">
  </div>
  <div class="form-group col-md-6">
    <label for="inputState">Horário de Funcionamento</label>
    <select id="inputState" class="form-control">
      <option selected>18h às 22h</option>
      <option>19h às 22h</option>
      <option>18h às 23h</option>
      <option>19h às 23h</option>
      <option>18h às 00h</option>
      <option>19h às 00h</option>
    </select>
  </div>

</div>

<button type="submit" class="btn btn-success">Salvar</button>
</form>
<br>
<small> * Todas essas informações serão inseridas automaticamente no Site </small>
</main>



</html>
