<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Cadastro</title>
          
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')</script>
      <script src="js/bootstrap.bundle.min.js" integrity="sha384-zDnhMsjVZfS3hiP7oCBRmfjkQC4fzxVxFhBx8Hkz2aZX8gEvA/jsP3eXRCvzTofP" crossorigin="anonymous"></script>
        <script src="js/form-validation.js"></script></body>

<?php require_once('header.php'); ?>

    <link href="form-validation.css" rel="stylesheet">
  </head>


  <body class="bg-light">

<br><br>

    <div class="container">
	<br><br>
	<p class="text-center"> Realize o cadastro utilizando uma das redes sociais</p>
	<ul class="list-inline text-center">
	<img src="image/redes-sociais/facebook.png" class="img-fluid" alt="Responsive image">
	<img src="image/redes-sociais/google.png" class="img-fluid" alt="Responsive image">
	</ul>

	 <hr class="mb-1">


<br>

<div class=" text-black text-center"> Ou preencha o <strong>formulário de cadastro</strong></div>

  <br><br>
    <div class="col-sm-12 order-md-">

                </div>
      <form class="needs-validation" novalidate>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">Primeiro Nome</label>
            <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
            <div class="invalid-feedback">
              Insira alguma informação no campo.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Segundo Nome</label>
            <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
            <div class="invalid-feedback">
              Insira alguma informação no campo.
            </div>
          </div>
        </div>
<div class="row">
        <div class="col-md-6 mb-3">
          <label for="username">Email</label>
          <div class="input-group">

            <input type="email" class="form-control" id="email" placeholder="email@exemplo.com" required>
            <div class="invalid-feedback" style="width: 100%;">
              Informe um email válido.
            </div>
          </div>
        </div>


		<div class="col-md-3 mb-3">
          <label for="username">Telefone</label>
          <div class="input-group">

            <input type="text" class="form-control" id="telefone" placeholder="" required>

            <div class="invalid-feedback" style="width: 100%;">
              Informe apenas numeros.
            </div>
          </div>
        </div>

		<div class="col-md-3 mb-3">
          <label for="username">CPF</label>
          <div class="input-group">

            <input type="text" class="form-control" id="cpf" placeholder="" required>

            <div class="invalid-feedback" style="width: 100%;">
              Informe apenas numeros.
            </div>
          </div>
        </div>
</div>
<div class="row">
        <div class="col-md-6 mb-3">
          <label for="address">Endereço</label>
          <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>

          <div class="invalid-feedback">
            Informe seu endereço.
          </div>
        </div>


	<div class="col-md-2 mb-3">
          <label for="address">N°</label>
          <input type="text" class="form-control" id="address" placeholder="" required>
          <div class="invalid-feedback">
            Informe o numero da casa/apartamento.
          </div>
        </div>



          <div class="col-md-4 mb-3">
            <label for="country">Cidade</label>
            <select class="custom-select d-block w-100" id="country" required>
              <option value="">Choose...</option>
              <option>Santo Antonio de Jesus</option>
            </select>
            <div class="invalid-feedback">
              Informe a cidade em que reside.
            </div>
          </div>
            </div>





        <hr class="mb-4">
        <button class="btn btn-success btn-lg btn-block" type="submit">Cadastrar</button>
      </form>
    </div>
  </div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2019 CodingSoftware.com</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>


</html>
