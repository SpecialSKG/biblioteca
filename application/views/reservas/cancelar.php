<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="container">
		<div class="card">
			<div class="col-md-12">
				<h1 align="center">ACTUALIZAR RESERVAS</h1>
				<br>
				<h4 align="center">Unidades disponibles de :</h4>
				<br>
				<h6 align="center"><input type="text" disabled="" value="<?=$x->titulo?>" style="text-align:center" ></h6>
				<br>
				<h6 align="center"><input type="text" disabled="" id="nadaStock" value="<?=$x->stock?>" style="text-align:center" ></h6>
			</div>
		</div>
	</div>
	<br>
	<br>
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				
			</div>
			<div class="col-md-3">
				
			</div>
			<div class="col-md-3">
				
			</div>
			<div class="col-md-3">
				
			</div>
		</div>
		<br>
		<br>
		<div class="row">
			<div class="col-md-4">
				<input type="hidden" id="id_reserva" value="<?= $x->id_reserva?>">
				<input type="hidden" id="id_libro" value="<?= $x->id_libro?>">
				<input type="hidden" id="cantodad" value="<?= $x->cantidad?>">
				<input type="hidden" id="dui" class="form-control" maxlength="10" minlength="10" value="<?= $x->dui?>">
				<input type="number" id="cantidad" class="form-control validarnumeros" min="1" max="<?=$x->stock?>" value="<?=$x->cantidad?>">
				<input type="date" id="fecha_entrega" class="form-control" min="<?php echo $fecha = date('Y-m-d'); ?>" value="<?= $x->fecha_entrega?>">
				<input type="date" id="fecha_salida" class="form-control" min="<?php echo $fecha = date('Y-m-d'); ?>" value="<?= $x->fecha_salida?>">
				

			</div>
			<div class="col-md-4">
				<input type="button" id="updateR" class="btn btn-block btn-primary" value="ACTUALIZAR">
			</div>
			<div class="col-md-4">
				
			</div>
		</div>
	</div>
</body>
</html>