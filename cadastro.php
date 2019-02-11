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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')</script><script src="js/bootstrap.bundle.min.js" integrity="sha384-zDnhMsjVZfS3hiP7oCBRmfjkQC4fzxVxFhBx8Hkz2aZX8gEvA/jsP3eXRCvzTofP" crossorigin="anonymous"></script>
        <script src="js/form-validation.js"></script></body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
	
  
  
  .navbar{
  opacity:0.95;
  }
  
  .navbar .navbar-brand{
  color:#fff;
  font-size: 25px;
  text-transform: uppercase;
  font-weight:bold;
  letter-spacing: 2px;
	}
	
	.navbar .navbar-brand:hover{

    opacity:0.7;
    }	
	.navbar-collapse .navbar-nav .nav-item .nav-link{

	color:#fff;
	
	}

	.dropdown-menu{
	left:1110px;

	
	}
	
	 .dropdown-menu h5{
	 font-size:11px;
	 }
	  .dropdown-menu h6{
	 font-size:15px;
	 }
	 .dropdown-menu a{
	 font-size:11px;
	 }
	 
	 
	 
	 .dropdown-menu button{
	  width: 100%;
    margin: 0 auto;
	border-radius:20px;
	 
	 }
	 
	 .navbar-collapse .navbar-nav .nav-item .nav-link:hover{
background:rgba(185,37,52,0.6);
border-radius:5px;

	 }
	 .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
	  
	.container-footer{
	height:9,5%;
	width:100%;
	position:absolute;
	background:#DA3646;
	}
	  .container-footer p{
	  color:white;
	  }
	  
	  .container-footer a{
	  color:white;
	  
	  
	  }
	  .container-footer .social:hover{
	 opacity:0.5;
	  
	  
	  }
	  .float-right {
	  right:10px;
	  position:relative;
	  }
	  .container-footer h5{
	  
	  text-align:center;
	  color: white;
	  font-weight:none;
	  font-size:10pt;
	  }
	  
	  
	  
	  .foot{
	  
	  background:rgba(185,37,52,1.0);
	  width:100%;
	  position:absolute;
	  
	  }
	 
	  .foot p{
	
	  text-align:center;

	  margin-bottom: 0px;
	  font-size:13px;
	 
	  }
	  
	  .card:hover{
	 box-shadow: 0px 0px 8px grey;
	  }
	  
	  .col-lg-4 .txtchato {
	  font-size: 21pt;
	  }
	  
	  .navbar .dropdown-menu {
		border-radius: 1px;
		border-color: #e5e5e5;
		box-shadow: 0 2px 8px rgba(0,0,0,.05);
	}
	.navbar .nav .dropdown-menu li {
		color: #999;
		font-weight: normal;
	}
	.navbar .nav .dropdown-menu li a, .navbar .nav .dropdown-menu li a:hover, .navbar .nav .dropdown-menu li a:focus {
		padding: 8px 20px;
		line-height: normal;
	}
	.navbar .navbar-form {
		border: none;
	}
	.navbar .dropdown-menu.form-wrapper {
		width: 280px;
		padding: 20px;
		left: auto;
		right: 2px;
        font-size: 14px;
	}
	.navbar .dropdown-menu.form-wrapper a {		
		color: black;
		padding: 0 !important;
	}
	.navbar .dropdown-menu.form-wrapper a:hover{
		text-decoration: underline;
	}
	.navbar .form-wrapper .hint-text {
		text-align: center;
		margin-bottom: 15px;
		font-size: 13px;
	}
	.navbar .form-wrapper .social-btn .btn, .navbar .form-wrapper .social-btn .btn:hover {
		color: #fff;
        margin: 0;
		padding: 0 !important;
		font-size: 13px;
		border: none;
		transition: all 0.4s;
		text-align: center;
		line-height: 34px;
		width: 47%;
		text-decoration: none;
    }	
	.navbar .social-btn .btn-primary {
		background: #507cc0;
	}
	.navbar .social-btn .btn-primary:hover {
		background: #4676bd;
	}
	.navbar .social-btn .btn-info {
		background: #64ccf1;
	}
	.navbar .social-btn .btn-info:hover {
		background: #4ec7ef;
	}
	.navbar .social-btn .btn i {
		margin-right: 5px;
		font-size: 16px;
		position: relative;
		top: 2px;
	}
	.navbar .form-wrapper .form-footer {
		text-align: center;
		padding-top: 10px;
		font-size:18pt;
	}
	.navbar .form-wrapper .form-footer a:hover{
		text-decoration: underline;
	
	}
	.navbar .form-wrapper .checkbox-inline input {
		margin-top: 3px;
	}
	.or-seperator {
        margin-top: 32px;
		text-align: center;
		border-top: 1px solid #e0e0e0;
    }
    .or-seperator b {
		color: #666;
        padding: 0 7px;
		width: 30px;
		height: 30px;
		font-size: 13px;
		text-align: center;
		line-height: 26px;
		background: #fff;
		display: inline-block;
		border: 1px solid #e0e0e0;
		border-radius: 50%;
		position: relative;
		top: -15px;
		z-index: 1;
    }
    .navbar .checkbox-inline {
		font-size: 13px;
	}
	.navbar .navbar-right .dropdown-toggle::after {
		display: none;
	}
	@media (min-width: 1200px){
		.form-inline .input-group {
			width: 300px;
			margin-left: 30px;
		}
	}
	@media (max-width: 768px){
		.navbar .dropdown-menu.form-wrapper {
			width: 100%;
			padding: 10px 15px;
			
			border: none;
		}
		.navbar .form-inline {
			display: block;
		}
		.navbar .input-group {
			width: 100%;
		}
		.navbar .nav .btn-primary, .navbar .nav .btn-primary:active {
			display: block;
		}
	}
	
	.bg-light{
       background-color:#f2f2f2 !important;
	}
	 
	 .container {
  max-width: 960px;
}

.lh-condensed { line-height: 1.25; }




img{

    height: 30px;
    width: 30px;
    background-size: contain;
    background-repeat: no-repeat;



}

img:hover {
opacity:0.8;

}


    </style>
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
  
  
  <body class="bg-light">
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
          <a class="nav-link" href="#">Cardápio</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="#">Monte sua Pizza</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="contato.html">Contato</a>
        </li>
      		 <li class="nav-item">
          <a class="nav-link" href="cadastro.html">Cadastre-se</a>
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
    </div> 
  </nav>
  
</header>
<br><br>

    <div class="container">
	<br><br>
	<p class="text-center"> Realize o cadastro utilizando uma das redes sociais</p>
	<ul class="list-inline text-center">
	<img src="facebook.png" class="img-fluid" alt="Responsive image">
	<img src="google.png" class="img-fluid" alt="Responsive image">
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