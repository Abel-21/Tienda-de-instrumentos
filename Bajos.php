<?php
session_start();
if(isset($_SESSION["uid"])){
	header("location:Bajos_S.php");
}
?>
<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />

  <title>Agency - Start Bootstrap Theme</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet'
    type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/agency.min.css" rel="stylesheet">

</head>

<body style="padding: 55px 0px">
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-shrink" id="mainNav"
    style="background-color: #212529!important">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="index.php">Penthagrom Music</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
        data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
        aria-label="Toggle navigation">
        Menú
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php#qs">¿Quiénes somos?</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php#portfolio">Categorías</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php#team">Team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php#contacto">Contacto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="login.php">Iniciar sesión</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">
    <!-- Heading Row -->
    <div class="row align-items-center my-5 ">
      <div class="col-lg-7">
        <video src="video/bajo.mp4" width="600" height="300" autoplay controls> </video>
      </div>
      <!-- /.col-lg-8 -->
      <div class="col-lg-5">
        <div class="row align-items-center my-5">
          <div class="col-lg-7">
            <img class="img-fluid" src="img/Bajos/bajo1.jpg" width="600" height="300">
          </div>
        </div>
        <h1 class="font-weight-light">Descripción</h1>
        <p style="color: #6c757d">Bajo Fender Edicion limitada Telecaster 2018 Limited Edition '51 Telecaster® PJ Bass,
          Maple Fingerboard, BGB N.º de modelo 0176092768 Country Of Origin US Color Blackguard Blonde Cuerpo Ash
          Acabado del cuerpo Gloss. </p>
        <a class="btn btn-primary" href="Bajo Fender.php">Comprar</a>
      </div>
      <!-- /.col-md-4 -->
    </div>
    <!-- /.row -->
    <div class="card text-white bg-secondary my-5 py-4 text-center" style="background-color: #212529!important">
      <div>
        <p style="margin-bottom: 0">A continuación te presentamos más modelos...</p>
      </div>
    </div>

    <!-- Content Row -->
    <div class="row">
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <div class="card-body">
            <h2 class="card-title">Bajo Fender ROGER WATERS PRECISION BASS</h2>
            <img class="img-fluid" src="img/Bajos/bajo2.jpg" width="200" height="100">
            <p class="card-text">El Roger Waters Precision Bass le ofrece el sonido y el estilo elementales del aclamado
              bajista / cantante / compositor, cuyos ritmos elegantes son el sello del clásico Pink Floyd y una aclamada
              carrera en solitario que continúa más fuerte.</p>
          </div>
          <div class="card-footer">
            <audio src="audio/Bajos/fenderbass.mp3" preload="none" controls></audio>
            <audio src="audio/fenderbass.ogg" autoplay loop></audio>
            <a href="Bajo Fender ROGER WATERS.php" class="btn btn-primary btn-sm">Comprar</a>
          </div>
        </div>
      </div>
      <!-- /.col-md-4 -->
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <div class="card-body">
            <h2 class="card-title">Bajo Epiphone EB-3 Cherry</h2>
            <img class="img-fluid" src="img/Bajos/bajo3.jpg" width="200" height="100">
            <p class="card-text"> Historia del Bajo EB Clásico A principios de los años 60, la fábrica de Kalamazoo,
              hogar de los instrumentos Epiphone y Gibson, decidió dejar de producir la guitarra Les Paul. En su lugar
              vino un nuevo diseño radical de la guitarra que también influyó los diseños.</p>
          </div>
          <div class="card-footer">
            <audio src="audio/Bajos/fenderbass.mp3" preload="none" controls></audio>
            <audio src="audio/fenderbass.ogg" autoplay loop></audio>
            <a href="Bajo Epiphone.php" class="btn btn-primary btn-sm">Comprar</a>
          </div>
        </div>
      </div>
      <!-- /.col-md-4 -->
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <div class="card-body">
            <h2 class="card-title">Bajo Fender AMERICAN ORIGINAL'60S </h2>
            <img class="img-fluid" src="img/Bajos/bajo4.jpg" width="200" height="100">
            <p class="card-text"> En la década de 1960, el Precision Bass era el contrabajo eléctrico; Desde los clubes
              de Detroit hasta las playas del sur de California, su tono sentó las bases de la música moderna. El
              Precision Bass original de los años 60 en...</p>
          </div>
          <div class="card-footer">
            <audio src="audio/Bajos/fenderbass.mp3" preload="none" controls></audio>
            <audio src="audio/fenderbass.ogg" autoplay loop></audio>
            <a href="Bajo Fender AMERICAN.php" class="btn btn-primary btn-sm">Comprar</a>
          </div>
        </div>
      </div>
      <!-- /.col-md-4 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-4">
          <span class="copyright">Copyright &copy; Your Website 2019</span>
        </div>
        <div class="col-md-4">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="list-inline quicklinks">
            <li class="list-inline-item">
              <a href="#">Privacy Policy</a>
            </li>
            <li class="list-inline-item">
              <a href="#">Terms of Use</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>