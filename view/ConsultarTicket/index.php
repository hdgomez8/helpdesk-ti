<?php
require_once("../../config/conexion.php");
$dir_proyecto = $settings['DIRECCION_PROYECTO'];
if (isset($_SESSION["usu_id"])) {
?>
	<!DOCTYPE html>
	<html>
	<?php require_once("../MainHead/head.php"); ?>
	<title>HelpDesk CMC</>::Consultar Solicitud</title>
	</head>

	<body class="with-side-menu">

		<?php require_once("../MainHeader/header.php"); ?>

		<div class="mobile-menu-left-overlay"></div>

		<?php require_once("../MainNav/nav.php"); ?>

		<!-- Contenido -->
		<div class="page-content">
			<div class="container-fluid">

				<header class="section-header">
					<div class="tbl">
						<div class="tbl-row">
							<div class="tbl-cell">
								<h3>Consultar Solicitud</h3>
								<ol class="breadcrumb breadcrumb-simple">
									<li><a href="../Home/index.php">Inicio</a></li>
									<li class="active">Consultar Solicitud</li>
									<input type="hidden" id="dir_proyecto" value="<?php echo $dir_proyecto; ?>">
								</ol>
							</div>
						</div>
					</div>
				</header>

				<div class="box-typical box-typical-padding">

					<div class="row" id="viewuser" style="display: none;">
						<div class="col-lg-3">
							<fieldset class="form-group">
								<label class="form-label" for="tick_titulo">Asunto</label>
								<input type="text" class="form-control" id="tick_titulo" name="tick_titulo" placeholder="Ingrese Asunto" required>
							</fieldset>
						</div>

						<div class="col-lg-3">
							<fieldset class="form-group">
								<label class="form-label" for="cat_id">Categoría</label>
								<select class="select2" id="cat_id" name="cat_id" data-placeholder="Seleccionar">
									<option label="Seleccionar"></option>

								</select>
							</fieldset>
						</div>

						<div class="col-lg-2">
							<fieldset class="form-group">
								<label class="form-label" for="prio_id">Prioridad</label>
								<select class="select2" id="prio_id" name="prio_id" data-placeholder="Seleccionar">
									<option label="Seleccionar"></option>

								</select>
							</fieldset>
						</div>

						<div class="col-lg-2">
							<fieldset class="form-group">
								<label class="form-label" for="btnfiltrar">&nbsp;</label>
								<button type="submit" class="btn btn-rounded btn-primary btn-block" id="btnfiltrar">Filtrar</button>
							</fieldset>
						</div>

						<div class="col-lg-2">
							<fieldset class="form-group">
								<label class="form-label" for="btntodo">&nbsp;</label>
								<button class="btn btn-rounded btn-primary btn-block" id="btntodo">Ver Todo</button>
							</fieldset>
						</div>
					</div>

					<div class="box-typical box-typical-padding">
						<div class="box-typical box-typical-padding" id="table">
							<table id="ticket_data" class="table table-bordered table-striped table-vcenter js-dataTable-full">
								<thead>
									<tr>
										<th style="width: 5%;">Nro.<br />Ticket</th>
										<th style="width: 15%;">Usuario</th>
										<th style="width: 5%;">Categoria</th>
										<th class="d-none d-sm-table-cell" style="width: 30%;">Titulo</th>
										<th class="d-none d-sm-table-cell" style="width: 5%;">Prioridad</th>
										<th class="d-none d-sm-table-cell" style="width: 5%;">Estado</th>
										<th class="d-none d-sm-table-cell" style="width: 10%;">Fecha<br />Creación</th>
										<th class="d-none d-sm-table-cell" style="width: 10%;">Fecha<br />Asignación</th>
										<th class="d-none d-sm-table-cell" style="width: 10%;">Fecha<br />Cierre</th>
										<th class="d-none d-sm-table-cell" style="width: 10%;">Soporte</th>
										<th class="text-center" style="width: 5%;"></th>
									</tr>
								</thead>
								<tbody>

								</tbody>
							</table>
						</div>
					</div>

				</div>

			</div>
		</div>
		<!-- Contenido -->
		<?php require_once("modalasignar.php"); ?>

		<?php require_once("../MainJs/js.php"); ?>

		<script type="text/javascript" src="consultarticket.js"></script>

		<script type="text/javascript" src="../notificacion.js"></script>

	</body>

	</html>
<?php
} else {
	header("Location:" . Conectar::ruta() . "index.php");
}
?>