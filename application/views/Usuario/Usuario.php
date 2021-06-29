<style type="text/css">
	.hero-image {
		background-image: linear-gradient(
			rgba(0, 0, 0, 0),
			rgba(0, 0, 0, 0));
	}
	.principal{
		background-image: url("<?php echo base_url('asset/img/ha.gif');?>");
		background-size: 100% 100%; background-repeat: no-repeat; background-attachment: fixed;
	}
</style>
<body class="principal">
	<div class="hero-image">
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<div class="hero-text">
			<h2 align="center" style="color: white; font-size: 70px " class="texto-borde p">Hola<br>
				<?php echo $this->session->userdata('nombre_user') ?>!!
			</h2>
			<br><br>
		</div>
		<h2 align="center">
			<?php if ($this->session->userdata('rol_') === '3'): ?>
				<button class="button p" style="vertical-align:middle;">
					<a style="font-size: 38px " href="<?php echo base_url();?>Libro_C/index">
						<span>Escoger libros </span>
					</a>
				</button>
			<?php endif ; ?>
		</h2>
	</div>
	<!-- Footer -->
	<footer class="footer bg-light">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 h-100 text-center text-lg-left my-auto">
					<ul class="list-inline mb-2">
						<li class="list-inline-item"><br>
							<h5>
								<a href="#"><i class="fas fa-map-marker-alt"> Centro, San Salvador, El Salvador</i></a>
							</h5>
						</li><br><br>
						<li class="list-inline-item">
							<h5><a href="#"><i class="fas fa-phone-alt"> (+503) 2547-8946</i></a></h5>
						</li>
					</ul>
					<br>
					
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
					<br>

					<ul class="list-inline mb-2">
						<li class="list-inline-item">
							<a href="#">Acerca de</a>
						</li>
						<li class="list-inline-item">&sdot;</li>
						<li class="list-inline-item">
							<a href="#">Términos de Uso</a>
						</li>
						<li class="list-inline-item">&sdot;</li>
						<li class="list-inline-item">
							<a href="#">Política de privacidad</a>
						</li>
					</ul>
					<p class="text-muted small mb-4 mb-lg-0">&copy; 2019. Todos los derechos reservados.</p>
				</div>
			</div>
		</div>
	</footer>
</body>