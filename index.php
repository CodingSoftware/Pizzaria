<!doctype html>
<?php
require_once('header.php');
?>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Carousel Template · Bootstrap</title>

    <!-- Bootstrap core CSS -->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
<link rel="stylesheet" media="screen and (max-width: 450px)" href="smartphone.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

    <style>



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
	.login{

	font-size:11pt;
	}
	.cad{

	font-size:11pt;
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

	  .list-inline-item:hover {
	  background:rgba(185,37,52,0.6);

border-radius:20px;
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
    </style>
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>
    

<main role="main">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" ><rect fill="#777" width="100%" height="100%"/></svg>
        <div class="container">
          <div class="carousel-caption text-left">
            <h1>Example headline.</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a class="btn btn-lg btn-danger" href="#" role="button">Monte sua Pizza</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" ><rect fill="#777" width="100%" height="100%"/></svg>
        <div class="container">
          <div class="carousel-caption">
            <h1>Another example headline.</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a class="btn btn-lg btn-danger" href="#" role="button">Monte sua Pizza</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" ><rect fill="#777" width="100%" height="100%"/></svg>
        <div class="container">
          <div class="carousel-caption text-right">
            <h1>One more for good measure.</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a class="btn btn-lg btn-danger" href="#" role="button">Monte sua Pizza</a></p>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
	  <div class="card">
      <div class="card-body">
       <i class="far fa-clock fa-3x"></i>
        <h2 class="txtchato">Horário de Atendimento</h2>
        <p><span>19:00h às 22:00h</span></p>


      </div><!-- /.col-lg-4 -->
	  </div>
	    </div>
      <div class="col-lg-4">
	   <div class="card">
      <div class="card-body">
        <i class="fab fa-cc-mastercard fa-3x"></i> <i class="fab fa-cc-visa fa-3x"></i>
        <h2>Cartões</h2>
        <p>Aceitamos todas as bandeiras</p>

      </div><!-- /.col-lg-4 -->
	   </div>
	    </div>
      <div class="col-lg-4">
	     <div class="card">
      <div class="card-body">
       <i class="fas fa-motorcycle fa-3x"></i>
        <h2>Entrega Grátis</h2>
        <p>Toda Segunda e Terça Feira</p>

      </div><!-- /.col-lg-4 -->
	   </div>
	    </div>
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>
      <div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect fill="#eee" width="100%" height="100%"/><text fill="#aaa" dy=".3em" x="50%" y="50%">500x500</text></svg>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect fill="#eee" width="100%" height="100%"/><text fill="#aaa" dy=".3em" x="50%" y="50%">500x500</text></svg>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">

        <h2 class="featurette-heading">Nossas<span class="text-muted"> Informações:</span></h2>
    <br>
        <p class="lead"><i class="fas fa-location-arrow fa-1x"></i> Endereço: Rua Vereador João Silva , N° 19</p>
		<p class="lead"><i class="fas fa-phone fa-1x"></i> Numéro para contato : (75)99999-9999</p>
		<p class="lead"><i class="fas fa-envelope fa-1x"></i> email@email.com</p>
      </div>
      <div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Nome da Pizzaria</title><rect fill="#eee" width="100%" height="100%"/><text fill="#aaa" dy=".3em" x="50%" y="50%">Foto da Pizzaria</text></svg>
      </div>
    </div>



    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->

    <hr class="featurette-divider">
  <!-- FOOTER -->
  <footer class="container-footer">

	 <div class="col-xs-12 col-sm-12 col-md-12 mt-2 txt2 text-center text-white">

	 <a class="social"> <i class="fab fa-twitter fa-2x"></i> </a> <a class="social"><i class="fab fa-instagram fa-2x"></i>   </a> <a class="social" ><i class="fab fa-facebook fa-2x"></i> </a>


				</div>
			<br>
			<div class="foot">

    <p>&copy;2019 <a href="#">CodingSoftware.com</a></p>
</div>
  </footer>
</main>
</body>
</html>
