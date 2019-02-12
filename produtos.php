<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="js/sidebar.js"></script>
<script src="js/ajaxinsert.js"></script>
<script src="js/ajaxselect.js"></script>




</head>
<?php
require_once('modal.php');
require_once('sidebar.php');
?>
		<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <br>
<h2> Cadastro de Produtos </h2>
    <form>
      <br>

      <div class="form-row">
      <div class="form-group col-md-4">
      <label for="inputState">Tamanho da Pizza</label>
      <select id="selecttam" class="form-control">
      </select>


      <br>
      	<ul class="list-inline text-center">
      <button type="button" class="btn btn-sm btn-success" data-toggle='modal' data-target='#ModalInsertTamanho'><i class="fas fa-plus"></i></button>
      <button type="button" class="btn btn-sm btn-danger" data-toggle='modal' data-target='#ModalDeleteTamanho'><i class="fas fa-minus"></i></button>
      	</ul>
    </div>
    <div class="form-group col-md-4">
    <label for="inputState">Tipos de Bordas</label>
    <select id="selectbord" class="form-control">
    </select>
    <br>
      <ul class="list-inline text-center">
    <button type="button" class="btn btn-sm btn-success" data-toggle='modal' data-target='#ModalInsertBorda'><i class="fas fa-plus"></i></button>
    <button type="button" class="btn btn-sm btn-danger" data-toggle='modal' data-target='#ModalDeleteBorda'><i class="fas fa-minus"></i></button>
      </ul>
    </div>

    <div class="form-group col-md-4">
    <label for="inputState">Sabores da Pizza</label>
    <select id="selectsabor" class="form-control">
    </select>
    <br>
      <ul class="list-inline text-center">
    <button type="button" class="btn btn-sm btn-success" data-toggle='modal' data-target='#ModalInsertSabor'><i class="fas fa-plus"></i></button>
    <button type="button" class="btn btn-sm btn-danger" data-toggle='modal' data-target='#ModalDeleteSabor'><i class="fas fa-minus"></i></button>
      </ul>
    </div>
    </div>
    <div class="form-row">
    <div class="form-group col-md-4">
    <label for="inputState">Refrigerante</label>
    <select id="selectbebida" class="form-control">
    </select>
    <br>
      <ul class="list-inline text-center">
    <button type="button" class="btn btn-sm btn-success" data-toggle='modal' data-target='#ModalInsertBebida'><i class="fas fa-plus"></i></button>
    <button type="button" class="btn btn-sm btn-danger" data-toggle='modal' data-target='#ModalDeleteBebida'><i class="fas fa-minus"></i></button>
      </ul>
        </div>

    <div class="form-group col-md-4">
    <label for="inputState">MotoBoy</label>
    <select id="selectentrega" class="form-control">
    </select>
    <br>
      <ul class="list-inline text-center">
    <button type="button" class="btn btn-sm btn-success" data-toggle='modal' data-target='#ModalInsertEntrega'><i class="fas fa-plus"></i></button>
    <button type="button" class="btn btn-sm btn-danger" data-toggle='modal' data-target='#ModalDeleteEntrega'><i class="fas fa-minus"></i></button>
      </ul>
    </div>
  </div>

    </form>

      <small> * Todas essas informações serão inseridas automaticamente no Site </small>
</main>



</html>
