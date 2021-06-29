<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url().'asset/img/logo.png' ?>">


	<title><?= $page_title ;?></title>
	<!-- Custom fonts for this template -->
	<link href="<?php echo base_url() ;?>asset/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ;?>pages/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="<?php echo base_url() ;?>pages/css/landing-page.min.css" rel="stylesheet">
	<!-- Custom styles for this template-->
	<link href="<?php echo base_url() ;?>asset/css/sb-admin-2.min.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/toastr.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asset/css/sweetalert2.min.css">
	<!-- Custom styles for this page -->
	<link href="<?php echo base_url() ;?>asset/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

	

	

	<link rel="stylesheet" href="<?php echo base_url();?>asset/css/main.css">

	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container">
			
			<a class="navbar-brand" href="<?php echo base_url();?>inicio_C/Index"><i class="fas fa-book"></i> Biblioteca</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item ">
						<a class="nav-link" href="<?php echo base_url();?>inicio_C/Index">Inicio <span class="sr-only">(current)</span></a>
					</li>
				</ul>
			</div>
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url();?>Login_C/LoginC">Iniciar sesion<span class="sr-only">(current)</span></a>
				</li>
			</ul>
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url();?>Login_C/registerC">Registrarse<span class="sr-only">(current)</span></a>
				</li>
			</ul>

		</div>
	</nav>

	<style>
		.principal{
			background-image: url("<?php echo base_url('asset/img/principal.jpg');?>");
			background-size: 100% 100%; background-repeat: no-repeat; background-attachment: fixed;
		}
		.re{
			background-image: url("<?php echo base_url('asset/img/fot.jpg');?>");
			background-size: 100% 100%; background-repeat: no-repeat; background-attachment: fixed;
		}
		.reser{
			background-image: url("<?php echo base_url('asset/img/resert.jpg');?>");
			background-size: 100% 100%; background-repeat: no-repeat; background-attachment: fixed;
		}
		.foo{
			background-image: url("<?php echo base_url('asset/img/foli.jpg');?>");
			background-size: 100% 100%; background-repeat: no-repeat; background-attachment: fixed;
		}
		.fondo{
			background-image: url("<?php echo base_url('asset/img/fondo.jpg');?>");
			background-size: 100% 100%; background-repeat: no-repeat; background-attachment: fixed;
		}

		.fodo{
			background-image: url("<?php echo base_url('asset/img/fdo.jpg');?>");
			background-size: 100% 100%; background-repeat: no-repeat; background-attachment: fixed;
		}

		.fondo2{
			background-image: url("<?php echo base_url('asset/img/infa.jpg');?>");
			background-size: 100% 100%; background-repeat: no-repeat; background-attachment: fixed;
		}

		.fondo3{
			background-image: url("<?php echo base_url('asset/img/fondo3.jpg');?>");
			background-size: 100% 100%; background-repeat: no-repeat; background-attachment: fixed;
		}

		.fondo4{
			background-image: url("<?php echo base_url('asset/img/accion.jpg');?>");
			background-size: 100% 100%; background-repeat: no-repeat; background-attachment: fixed;
		}

		.fondo5{
			background-image: url("<?php echo base_url('asset/img/fondo5.jpg');?>");
			background-size: 100% 100%; background-repeat: no-repeat; background-attachment: fixed;
		}

		.fondo6{
			background-image: url("<?php echo base_url('asset/img/mejor.jpg');?>");
			background-size: 100% 100%; background-repeat: no-repeat; background-attachment: fixed;
		}

		.fondo7{
			background-image: url("<?php echo base_url('asset/img/risas.jpg');?>");
			background-size: 100% 100%; background-repeat: no-repeat; background-attachment: fixed;
		}

		.bg-login-image {
			background-image: url("<?php echo base_url('asset/img/prueba.JPG');?>");
			background-position: center;
			background-size: cover;
		}

		.bg-register-image {
			background-image: url("<?php echo base_url('asset/img/prueba2.png');?>");
			background-position: center;
			background-size: cover;
		}

		.bg-password-image {
			background: url("https://source.unsplash.com/oWTW-jNGl9I/600x800");
			background-position: center;
			background-size: cover;
		}

	</style>
</head>