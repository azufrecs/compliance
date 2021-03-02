<!doctype html>
<html lang="es">
	<head>
		<!-- Etiquetas <meta> obligatorias para Bootstrap -->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="img/favicon.png">
		<title>Ventas - Cumplimiento</title>

		<!-- Enlazando el CSS de Bootstrap -->
		<link href="css/bootstrap.css" rel="stylesheet" media="screen">
		<link href="css/hover.css" rel="stylesheet" media="screen">
		<link href="css/main.css" rel="stylesheet" media="screen">
		<link href="css/rotate.css" rel="stylesheet" media="screen">
		<link href="css/icons.css" rel="stylesheet" media="screen">
		<link href="css/signin.css" rel="stylesheet" media="screen">
		<!-- Enlazando el CSS de Bootstrap -->
		
		<!-- Enlazando el JavaScript de Bootstrap -->
		<script src="js/jquery-3.5.1.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/rotate.js"></script>
		<script src="js/jquery_rotate.js"></script>
		<script src="js/icons.js"></script>
		<!-- Enlazando el JavaScript de Bootstrap -->
	</head>
  
	<body>
		<div class="container">
			<!-- BEGIN CONTENT -->
			<div class="content">
				<!-- Inicio de Encabezado -->
				<div class="row">
					<div class="col" align="center"><img src="img/logo.png"></div>
				</div>	
				
				<div align="center" class="fs-3" >Ventas y Cumplimiento de Farmacias</div>
				<div align="center" style="color:#eeeeee; font-size:20px">&nbsp;</div>
				<!-- Fin de Encabezado -->

				<div align="center" class="fs-4 text-secondary">Seleccione Año y Mes a mostrar</div>
				<div align="center" style="color:#eeeeee; font-size:3px">&nbsp;</div>
				<form id="frmInicio" name="frmInicio" method="post" action="site/security/validar.php">
					<div class="form-row" align="center">
						<div class="row" align="center">
							<div class="col-sm"></div>
							<div class="col-sm-2">
								<div class="input-group">
									<select name="cboYear" class="form-select" id="cboYear" required>
										<option disabled value="" selected hidden>Choose...</option>
										<option value="1">2021</option>
										<option value="2">2020</option>
										<option value="3">2019</option>
									</select>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="input-group">
									<select name="cboMonth" class="form-select" id="cboMonth" required>
										<option disabled value="" selected hidden>Choose...</option>
										<option value="1">Enero</option>
										<option value="2">Febrero</option>
										<option value="3">Marzo</option>
										<option value="1">Abril</option>
										<option value="2">Mayo</option>
										<option value="3">Junio</option>
										<option value="1">Julio</option>
										<option value="2">Agosto</option>
										<option value="3">Septiembre</option>
										<option value="1">Octubre</option>
										<option value="2">Noviembre</option>
										<option value="3">Diciembre</option>
									</select>
								</div>
							</div>
							<div class="col-sm"></div>
						</div>

						<div align="center" style="color:#eeeeee; font-size:6px">&nbsp;</div>

						<div class="row" align="center">
							<div class="col-sm"></div>
							<div class="col-sm-4">
								<button type="submit" name="cboMostrar" class="btn btn-primary w-100">Mostrar</button>
							</div>
							<div class="col-sm"></div>
						</div>
					</div>
				</form>
			</div>
			<!-- FINISH CONTENT -->

			<!-- BEGIN FOOTER -->
			<footer>
				<div class='col-md-12' align='center'>
					<div class='btn-group btn-group-sm'>
						<a class='btn btn-success' href='https://www.cmw.smcsalud.cu' role='button' data-placement='top'>Web SMC Cmw</a>
					</div>
					<div align="center" style="color:#666666; font-size:12px">Servicios M&eacute;dicos Cubanos, Sucursal Camag&uuml;ey<div>
				</div>
			</footer>
			<!-- FINISH FOOTER -->
		</div>
		<!-- FINISH CONTAINER -->
	</body>
</html>