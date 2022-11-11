<?php
session_start();
if (isset($_SESSION['usuario'])) {
	$usuariologin = $_SESSION['usuario'];
	echo "<script>window.alert('".$usuariologin."'); </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Maravillas Tour Riviera Maya - MTRM</title>

	<link rel="shortcut icon" href="recursos/imagenes/gt_favicon.png">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="recursos/css/bootstrap.min.css">
	<link rel="stylesheet" href="recursos/css/font-awesome.min.css">

	<link rel="stylesheet" href="recursos/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="recursos/css/main.css">
</head>

<body class="home">
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="index.php">Maravillas Tour Riviera May</a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li class="active"><a href="#">Inicio</a></li>
					<li><a href="sobrenosotros.php">Sobre nosotros</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Tours <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="tour1.php">Tour 1</a></li>
							<li><a href="tour2.php">Tour 2</a></li>
							<li class="active"><a href="tour3.php">Tour 3</a></li>
						</ul>
					</li>
					<li><a href="contacto.php">Contacto</a></li>
					<li><a class="btn" href="iniciosesion.php">INICIAR SESION / REGISTRARSE</a></li>
				</ul>
			</div>
		</div>
	</div> 

	<header id="head">
		<div class="container">
			<div class="row">
				<h1 class="lead">MARAVILLAS TOUR RIVIERA MAYA</h1>
				<p class="tagline">Agencia de Viajes</a></p>
				<p><a class="btn btn-default btn-lg" role="button" href="sobrenosotros.php">Sobre nosotros</a> <a class="btn btn-action btn-lg" role="button" href="tour1.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tours&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></p>
			</div>
		</div>
	</header>

	<div class="container text-center">
		<br> <br>
		<h2 class="thin">El Mejor Sitio Web para Realizar Reservas de Tours de Toda la Peninsula de Yucatan</h2>
		<p class="text-muted">
			Excursiones en Playa, Cenotes, Sitios Arqueologicos, Nados con delfines,<br> 
			Pueblos Magicos, Islas y Ruinas.
		</p>
	</div>
	<div class="container text-center">
		<br> <br>
		<h2 class="thin">Tours Disponibles a Cualquier Epoca del año</h2>
		<p class="text-muted">
			Por Toda la Peninsula de Yucatan
		</p>
	</div>
	<div class="container">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner">
        <div class="item active">
			<center><img src="recursos/imagenes/c1.png" alt=""></center>
            <div class="carousel-caption">
				<h3><FONT COLOR="Black"><b>Tour 1</b></FONT></h3>
				<button type="button" class="btn btn-link"><a style = "color:Black" href = "tour1.php">Mas Informacion</a></button>
            </div>
        </div>
  
        <div class="item">
			<center><img src="recursos/imagenes/c2.png" alt=""></center>
            <div class="carousel-caption">
                <h3><FONT COLOR="Black"><b>Tour 2</b></FONT></h3>
				<button type="button" class="btn btn-link"><a style = "color:Black" href = "tour2.php">Mas Informacion</a></button>
            </div>
        </div>
        
        <div class="item">
			<center><img src="recursos/imagenes/c3.png" alt=""></center>
            <div class="carousel-caption">
                <h3><FONT COLOR="Black"><b>Tour 3</b></FONT></h3>
				<button type = "button" class="btn btn-link"><a style = "color:Black" href = "tour3.php">Mas Informacion</a></button>
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
</div>

	<div class="jumbotron top-space">
		<div class="container">
			<h3 class="text-center thin">Ventajas de Reservar con Nosotros</h3>
			
			<div class="row">
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-cogs fa-5"></i>Intuitivo</h4></div>
					<div class="h-body text-center">
						<p>Nuestra pagina esta diseñada para un facil uso, para que cualquier persona pueda reservar sin ningun problema.</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-flash fa-5"></i>Rapidez</h4></div>
					<div class="h-body text-center">
						<p>Realiza tu proceso de reserva de la manera mas eficaz posible.</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-heart fa-5"></i>Seguridad</h4></div>
					<div class="h-body text-center">
						<p>Tus datos siempre estaran protegidos, 100% confidenciales</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-smile-o fa-5"></i>Satisfaccion</h4></div>
					<div class="h-body text-center">
						<p>Te garantizamos un viaje divertido e inolvidable.</p>
					</div>
				</div>
			</div>
		
		</div>
	</div>
	
	<section id="social">
		<div class="container">
			<div class="wrapper clearfix">
				<div class="addthis_toolbox addthis_default_style">
				<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
				<a class="addthis_button_tweet"></a>
				<a class="addthis_button_linkedin_counter"></a>
				<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
				</div>
			</div>
		</div>
	</section>

	<footer id="footer" class="top-space">

		<div class="footer1">
			<div class="container">
				<div class="row">
					
					<div class="col-md-3 widget">
						<h3 class="widget-title">Contacto</h3>
						<div class="widget-body">
							<p>+52 9848765480<br>
								<a href="mailto:#">maravillass2017@gmail.com</a><br>
								<br>
								Calle chachalal entre punta piedra y punta venado, Mzn 12, Lote 15, Akumal, Quintana Roo
							</p>	
						</div>
					</div>

					<div class="col-md-3 widget">
						<h3 class="widget-title">Siguenos en</h3>
						<div class="widget-body">
							<p class="follow-me-icons">
								<a href=""><i class="fa fa-twitter fa-2"></i></a>
								<a href=""><i class="fa fa-dribbble fa-2"></i></a>
								<a href=""><i class="fa fa-github fa-2"></i></a>
								<a href=""><i class="fa fa-facebook fa-2"></i></a>
							</p>	
						</div>
					</div>

					<div class="col-md-6 widget">
						<h3 class="widget-title">Maravillas Tour Riviera Maya</h3>
						<div class="widget-body">
							<p>Es una empresa que se especializa en viajes y transfes de todo tipo en la Riviera Maya.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer2">
			<div class="container">
				<div class="row">
					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="simplenav">
								<a href="#">Inicio</a> | 
								<a href="sobrenosotros.php">Sobre nosotros</a> |
								<a href="tour1.php">Tours</a> |
								<a href="contacto.php">Contacto</a> |
								<b><a href="registro.php">Registrarse</a></b>
							</p>
						</div>
					</div>

					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="text-right">
								Copyright &copy; 2022, Your name. Designed by MTRM</a>
							</p>
						</div>
					</div>

				</div>
			</div>
		</div>

	</footer>	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="recursos/js/headroom.min.js"></script>
	<script src="recursos/js/jQuery.headroom.min.js"></script>
	<script src="recursos/js/template.js"></script>
</body>
</html>