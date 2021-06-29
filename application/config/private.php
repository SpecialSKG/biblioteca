<?php

	if($_SESSION["acceso"]  != 1){

		redirect('inicio_C/Index', 'refresh');
		exit();
	}

?>