<!DOCTYPE html>
<html>
<head>
	<title>Libros</title>
	<link rel="stylesheet" href="<?php echo base_url();?>asset/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/css/pdf.css">
	<meta charset="utf-8">
</head>
<body>
	<form>
		<center>
			<header>
				<div id="contenedor">
					<div>
						<h1>Libros</h1>	
					</div>
					<hr>
					<h3>Fecha:<?=date('m/d/Y');?></h3>
					<h3>Hora:<?=date('h:i:s');?></h3><br><br>
					<!-- <div class="foto1"><img src="asset/imagenes/2libro.png"></div> -->
				</header>
				<br><br><br>
				<h2 align="center">Libros en existencia</h2><br>
				<div>
					<table align="center" class="table table-hover" >
						<thead>
							<tr style="background-color: lightblue">
								<th>Titulo</th>
								<th>Categoria</th>
								<th>Autor</th>
								<th>Fecha de Lanzamiento</th>
								<th>Editorial</th>
								<th>Stock</th>
							</tr>
						</thead>
						<tbody >
							<?php foreach ($libro as $l):?>
								<tr>
									<td><?=$l->titulo ?></td>
									<td><?=$l->categoria ?></td>
									<td><?=$l->nombre ?></td>
									<td><?=$l->fecha_lanzamiento ?></td>
									<td><?=$l->Editorial_e ?></td>
									<td><?=$l->stock ?></td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>

				<div class="footer">
					«El verbo leer no soporta el imperativo».
				</div>

			</center>	
		</form>
	</body>
	</html>