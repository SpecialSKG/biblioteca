
<body>
	<div class="container">
		<div class="card">
			<div class="text-white ">
				<div class="card-header bg-secondary"><h2>Agregar Cliente</h2></div>
			</div>
			<div class="card-body">
				<div class="form-row">
					<div class="col-md-12">
						<label for="">Agregar Nombre:</label>&nbsp;
						<input type="text" id="nombre" required class="form-control" placeholder="Escribe aqui...">
						<br>
						<label for="">Agregar Nombre de Usuario:</label>&nbsp;
						<input type="text" id="nombre_usuario" required class="form-control" placeholder="Escribe aqui...">
						<br>
						<label for="">Agregar Contraseña:</label>&nbsp;
						<input type="text" id="contrasena_usuario" required class="form-control" placeholder="Escribe aqui...">
						<br>
						<label for="">Agregar E-mail:</label>&nbsp;
						<input type="text" id="email" required class="form-control" placeholder="Escribe aqui...">
						<br>
						<label for="">Agregar Fecha de Nacimiento:</label>&nbsp;
						<input type="date" id="fecha_nacimiento" required class="form-control" placeholder="Escribe aqui..."><br>
						<label for="">Agregar Telefono:</label>&nbsp;
						<input type="text" id="telefono" required class="form-control" placeholder="Escribe aqui...">
						<br>
						<label for="">Agregar Sexo:</label>&nbsp;
						<input type="text" id="sexo" required class="form-control" placeholder="Escribe aqui...">
						<br>
						<label for="">Agregar DUI:</label>&nbsp;
						<input type="text" id="dui" required class="form-control" placeholder="Escribe aqui...">
						<br>
						<label for="">Agregar Direccion:</label>&nbsp;
						<input type="text" id="direccion" required class="form-control" placeholder="Escribe aqui...">
						<br>
						<input type="button" id="agregar_cliente" class="btn btn-primary" value="Agregar">
					</div>
				</div>
				
			</div>
			<div>
				<button class="btn btn-success" style="float: right;">
					<a href="<?php echo base_url();?>Cliente_C/index" style="color: white;">Retroceder</a>
				</button>
			</div>
		</div>
	</div><br><br>
</body>
</html>