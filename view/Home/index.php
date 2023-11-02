<?php
require_once("../../config/conexion.php");
if (isset($_SESSION["usu_id"])) {
?>
	<!DOCTYPE html>
	<html>
	<?php require_once("../MainHead/head.php"); ?>
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
	<title>HelpDesk CMC::Home</title>
	</head>

	<body class="with-side-menu">

		<?php require_once("../MainHeader/header.php"); ?>

		<div class="mobile-menu-left-overlay"></div>

		<?php require_once("../MainNav/nav.php"); ?>

		<!-- Contenido -->
		<div class="page-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12">
						<div class="row">
							<div class="col-sm-4">
								<article class="statistic-box yellow">
									<div>
										<div class="number" id="lbltotal"></div>
										<div class="caption">
											<div>Total de Tickets</div>
										</div>
									</div>
								</article>
							</div>
							<div class="col-sm-4">
								<article class="statistic-box red">
									<div>
										<div class="number" id="lbltotalabierto"></div>
										<div class="caption">
											<div>Total de Tickets Abiertos</div>
										</div>
									</div>
								</article>
							</div>
							<div class="col-sm-4">
								<article class="statistic-box green">
									<div>
										<div class="number" id="lbltotalcerrado"></div>
										<div class="caption">
											<div>Total de Tickets Cerrados</div>
										</div>
									</div>
								</article>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-12">
						<div class="row">
							<div class="col-sm-2">
								<article class="statistic-box red">
									<div>
										<div class="number" id="soporte1"></div>
										<div class="caption">
											<div>Paula Londoño</div>
										</div>
									</div>
								</article>
							</div>
							<div class="col-sm-2">
								<article class="statistic-box red">
									<div>
										<div class="number" id="soporte2"></div>
										<div class="caption">
											<div>Otoniel Pedroza</div>
										</div>
									</div>
								</article>
							</div>
							<div class="col-sm-2">
								<article class="statistic-box red">
									<div>
										<div class="number" id="soporte3"></div>
										<div class="caption">
											<div>Miguel Muñoz</div>
										</div>
									</div>
								</article>
							</div>
							<div class="col-sm-2">
								<article class="statistic-box red">
									<div>
										<div class="number" id="soporte4"></div>
										<div class="caption">
											<div>Hector Gomez</div>
										</div>
									</div>
								</article>
							</div>
							<div class="col-sm-2">
								<article class="statistic-box red">
									<div>
										<div class="number" id="soporte5"></div>
										<div class="caption">
											<div>Carlos Guzman</div>
										</div>
									</div>
								</article>
							</div>
							<div class="col-sm-2">
								<article class="statistic-box red">
									<div>
										<div class="number" id="soporte6"></div>
										<div class="caption">
											<div>Javier Prado</div>
										</div>
									</div>
								</article>
							</div>
						</div>
					</div>
				</div>
				<section class="card">
					<header class="card-header">
						Grafico Estadístico
					</header>
					<div class="card-block">
						<div id="divgrafico" style="height: 250px;"></div>
					</div>
				</section>

			</div>
		</div>
		<!-- Contenido -->

		<?php require_once("../MainJs/js.php"); ?>

		<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>

		<script type="text/javascript" src="home.js"></script>

		<script type="text/javascript" src="../notificacion.js"></script>

	</body>

	</html>
<?php
} else {
	header("Location:" . Conectar::ruta() . "index.php");
}
?>