<?php

session_start();
if (!isset($_SESSION["uid"])) {
    header("location:Baterias.php");
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
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">

</head>

<body style="padding: 55px 0px">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-shrink" id="mainNav" style="background-color: #212529!important">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="index.php">Penthagrom Music</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
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
                        <a href="#" class="nav-link js-scroll-trigger" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>

                            <?php echo "¡Hola, " . $_SESSION["name"] . "!"; ?>
                        </a>
                        <ul class="dropdown-menu" style="right: auto; left: auto; background: #212529eb;">
                            <li style="border-bottom: groove"><a href="cart.php" class="nav-link js-scroll-trigger"><span class="glyphicon glyphicon-shopping-cart">Carrito</a></li>
                            <!-- <li class="divider"></li>
                            <li><a href="customer_order.php">Orders</a></li> -->
                            <li class="divider"></li>
                            <li class="divider"></li>
                            <li><a href="logout.php" class="nav-link js-scroll-trigger">Salir</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Page Content -->
    <div class="container">
        <!-- Heading Row -->
        <div class="row align-items-center my-5">
            <div class="col-lg-7">
                <div class="col-lg-7">
                    <video src="video/dw.mp4" width="600" height="300" autoplay controls> </video>
                </div>
            </div>
            <!-- /.col-lg-8 -->
            <div class="col-lg-5">
                <div class="row align-items-center my-5">
                    <div class="col-lg-7">
                        <img class="img-fluid" src="img/Baterias/bateria11.jpg" width="500" height="500">
                    </div>
                </div>
                <h1 class="font-weight-light">Descripción</h1>
                <p style="color: #6c757d">Bateria dw Tour Custom. Los platillos se venden por separado *No incluye herrajes ni tarola Las compañías que brindan soporte en giras y festivales de música del mundo declaran que las baterías y el hardware de Yamaha son los más solicitados y confiables.</p>
                <a class="btn btn-primary" href="Bateria dw Tour Custom.php">Comprar</a>
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
                        <h2 class="card-title">Bateria Tama StageStar Azul </h2>
                        <img class="img-fluid" src="img/Baterias/bateria2.jpg" width="250" height="150">
                        <p class="card-text">La bateria mas vendida de TAMA, incluye: 18" x 14" Bombo 10" x 8" Tom 12" x 8" Tom 14" x 12" Tom de piso 13" x 5" Tarola Inclye los atriles: Hi-hat stand Low-profile snare stand Low-profile bass drum pedal Throne Double tom holder.</p>
                    </div>
                    <div class="card-footer">
                        <audio src="audio/Baterias/tamadrum.mp3" preload="none" controls></audio>
                        <audio src="audio/tamadrum.ogg" autoplay loop></audio>
                        <a href="Bateria Tama StageStar Azul.php" class="btn btn-primary btn-sm">Comprar</a>
                    </div>
                </div>
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title">Bateria electronica Roland TD-17KVX</h2>
                        <img class="img-fluid" src="img/Baterias/bateria4.jpg" width="250" height="150">
                        <p class="card-text"> Cuando hablas en serio de tocar la batería, necesitas un kit que coincida con tu ambición. La serie V-Drums TD-17 permite que su técnica brille, respaldada con herramientas de capacitación para impulsarlo aún más.</p>
                    </div>
                    <div class="card-footer">
                        <audio src="audio/Baterias/tamadrum.mp3" preload="none" controls></audio>
                        <audio src="audio/tamadrum.ogg" autoplay loop></audio>
                        <a href="Bateria electronica Roland.php" class="btn btn-primary btn-sm">Comprar</a>
                    </div>
                </div>
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <div class="card-body">
                        <h2 class="card-title">Bateria Rydeen Yamaha Plata</h2>
                        <img class="img-fluid" src="img/Baterias/bateria3.jpg" width="250" height="150">
                        <p class="card-text">El mas nuevo modelo de baterias Yamaha ahora listo para que te dure por años! *No incluye Platillos Diseño / Arquitectura DetalleHardwareClampLugsTipoShellsThicknessMaterialHeadTopBottomFrontBatterHoop RDP2F5.</p>
                    </div>
                    <div class="card-footer">
                        <audio src="audio/Baterias/tamadrum.mp3" preload="none" controls></audio>
                        <audio src="audio/tamadrum.ogg" autoplay loop></audio>
                        <a href="Bateria Rydeen.php" class="btn btn-primary btn-sm">Comprar</a>
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