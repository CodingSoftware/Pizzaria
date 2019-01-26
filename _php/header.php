<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Checkout example · Bootstrap</title>

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="navbar.css">
<link rel="stylesheet" href="style.css">

    <!-- Custom styles for this template -->

  </head>
  <body>
  <header>
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-danger">
    <a class="navbar-brand" href="#"> <i class="fas fa-utensils"></i>Pizzaria</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.html">Inicio <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Promoção da Semana</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="#">Cardápio</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="#">Monte sua Pizza</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="#">Contato</a>
        </li>
      		 <li class="nav-item">
          <a class="nav-link" href="#">Cadastre-se</a>
        </li>
			<li class="nav-item">
				<a data-toggle="dropdown" class="nav-link dropdown-toggle" href="#">Login</a>
				<ul class="dropdown-menu form-wrapper">
					<li>
						<form action="/examples/actions/confirmation.php" method="post">
							<p class="hint-text">Faça o seu login usando as Redes Sociais</p>
							<div class="form-group social-btn clearfix">
								<a href="#" class="btn btn-primary pull-left"><i class="fab fa-facebook"></i> Facebook</a>
								<a href="#" class="btn btn-info pull-right"><i class="fab fa-twitter"></i> Twitter</a>
							</div>
							<div class="or-seperator"><b>ou</b></div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Email" required="required">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" placeholder="Senha" required="required">
							</div>
							<input type="submit" class="btn btn-success btn-block" value="Logar">
							<div class="form-footer">
								<a href="#">Esqueceu a senha?</a>

							</div>

						</form>
					</li>
				</ul>
		 </li>

      </ul>

  </nav>

</header>
<br><br><br><br>
</body>
</html>
