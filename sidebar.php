<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<link rel="stylesheet" href="css/smartphone.css" media="screen and (max-width: 768px)">
<link rel="stylesheet" href="css/desktop.css" media="screen and (min-width: 768px)">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

<script src="js/sidebar.js"></script>
<script src="js/ajaxinsert.js"></script>
<script src="js/ajaxselect.js"></script>
<link rel="shortcut icon" href="image/favicon.png" width="16px" height="16px"/>
</head>

   <header>

  <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-danger">
    <a class="navbar-brand" href="#">Painel Administrativo</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php"><i class="fas fa-sign-out-alt"></i> Sair</a>
        </li>

    </nav>
</header>

<div class="container-fluid desativado">
      <div class="row">
        <nav class="col-md-2  d-md-block bg-light sidebar" id="side">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">


			  <li class="nav-item">


				<a class="nav-link" href="dashboard.php">

                <span><i class="fas fa-clipboard-list"></i> </span>

                  Dashboard
                </a>
              </li>

			   <li class="nav-item">
                <a class="nav-link" href="informacao.php">
                <i class="fas fa-users"></i>
                  Informações da Pizzaria
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="far fa-file"></i>
                  Vendas
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="produtos.php">
                  <i class="fas fa-shopping-cart"></i>
                  Produtos
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="fas fa-dollar-sign"></i>
                  Faturas
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="far fa-chart-bar"></i>
                  Relatórios
                </a>
              </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Saved reports</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Current month
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Last quarter
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Social engagement
                </a>
              </li>  <a class="side desativado" ><i class="fas fa-4x fa-caret-right"></i></a>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Year-end sale
                </a>
              </li>
            </ul>

          </div>


        </nav>
		</div>
  </div>

</html>
