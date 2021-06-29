<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body class="reser">
	<div class="container">
		<div class="card" style="background-color: #6B210C"> 
			<div class="col-md-12 p">
				<h1 align="center" style="color: white; font-size: 60px " class="texto-borde p">Registrar Reservas</h1>
				<br>
				<h4 align="center" style="color: white; font-size: 30px " class="texto-borde p">Unidades disponibles de :</h4>
				<br>
				<h6 align="center"><input type="text" disabled="" value="<?=$id->titulo?>" style="text-align:center" ></h6>
				<br>
				<h6 align="center"><input type="text" disabled="" id="nadaStock" value="<?=$id->stock?>" style="text-align:center" ></h6>
			</div>
		</div>
	</div>
	<br>
	<br>
	<div class="container p">
		<div class="row">
			<div class="col-md-3">
				
			</div>
			<div class="col-md-3 texto-borde" style="color: white; font-size: 30px ">
				Ingrese Dui de Cliente:
			</div>
			<div class="col-md-3">
				<input type="text" id="dui" class="form-control" maxlength="10" minlength="10">
			</div>
			<div class="col-md-3">
				
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-3">
				
			</div>
			<div class="col-md-3 texto-borde" style="color: white; font-size: 30px ">
				Unidades a Reservar :
			</div>
			<div class="col-md-3">
				<input type="number" id="cantidad" class="form-control validarnumeros" min="1" max="<?=$id->stock?>">
			</div>
			<div class="col-md-3">
				
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-3">
				
			</div>
			<div class="col-md-3 texto-borde" style="color: white; font-size: 30px ">
				Fecha de Retiro:
			</div>
			<div class="col-md-3">
				<input type="date" id="fecha_salida" class="form-control" min="<?php echo $fecha = date('Y-m-d'); ?>">
			</div>
			<div class="col-md-3">
				
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-3">
				
			</div>
			<div class="col-md-3 texto-borde" style="color: white; font-size: 30px ">
				Fecha de Entrega:
			</div>
			<div class="col-md-3">
				<input type="date" id="fecha_entrega" class="form-control" min="<?php echo $fecha = date('Y-m-d'); ?>">
			</div>
			<div class="col-md-3">
				
			</div>
		</div>
		<br>
		<br>
		<div class="row">
			<div class="col-md-4">
				<input type="hidden" id="id_libro" value="<?=$id->id_libro?>">
			</div>
			<div class="col-md-4">
				<input type="button" id="agregar_reserva" class="btn btn-block btn-primary" value="HACER RESERVA">
			</div>
			<div class="col-md-4">
				
			</div>
		</div><br>
	</div>
	<!-- Footer -->
	<footer class="footer bg-light">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 h-100 text-center text-lg-left my-auto">
					<ul class="list-inline mb-2">
						<li class="list-inline-item"><br>
							<h4><a href="#"><i class="fas fa-map-marker-alt"> Centro, San Salvador, El Salvador</i></a></h4>
						</li><br><br>
						<li class="list-inline-item">
							<h4><a href="#"><i class="fas fa-phone-alt"> (+503) 2547-8946</i></a></h4>
						</li>
					</ul><br>
					<ul class="list-inline mb-2">
						<li class="list-inline-item">
							<a href="#">About</a>
						</li>
						<li class="list-inline-item">&sdot;</li>
						<li class="list-inline-item">
							<a href="#">Terms of Use</a>
						</li>
						<li class="list-inline-item">&sdot;</li>
						<li class="list-inline-item">
							<a href="#">Privacy Policy</a>
						</li>
					</ul>
					<p class="text-muted small mb-4 mb-lg-0">&copy; Your Website 2019. All Rights Reserved.</p>
				</div>
				<div class="col-lg-6 h-100 text-center text-lg-right my-auto">
					<ul class="list-inline mb-0">
						<li class="list-inline-item mr-3">
							<a href="#">
								<i class="fab fa-facebook fa-2x fa-fw"></i>
							</a>
						</li>
						<li class="list-inline-item mr-3">
							<a href="#">
								<i class="fab fa-twitter-square fa-2x fa-fw"></i>
							</a>
						</li>
						<li class="list-inline-item">
							<a href="#">
								<i class="fab fa-instagram fa-2x fa-fw"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
</body>
</html>