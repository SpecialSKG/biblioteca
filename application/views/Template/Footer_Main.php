<!-- Footer -->
<!-- <footer class="sticky-footer bg-white">
	<div class="container my-auto">
		<div class="copyright text-center my-auto">
			<span>Copyright &copy; Your Website 2019</span>
		</div>
	</div>
</footer> -->
<!-- End of Footer -->
<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url().'asset/vendor/jquery/jquery.min.js' ;?>"></script>

<script src="<?php echo base_url().'asset/vendor/bootstrap/js/bootstrap.bundle.min.js' ;?>"></script>

<script src="<?php echo base_url().'asset/js/toastr.js' ;?>"></script>
<script src="<?php echo base_url().'asset/js/sweetalert2.min.js' ;?>"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo base_url().'asset/vendor/jquery-easing/jquery.easing.min.js' ;?>"></script>


<!-- Custom scripts for all pages-->
<script src="<?php echo base_url().'asset/js/sb-admin-2.min.js' ;?>"></script>

<!-- Page level plugins -->
<script src="<?php echo base_url().'asset/vendor/datatables/jquery.dataTables.js' ;?>"></script>
<script src="<?php echo base_url().'asset/vendor/datatables/dataTables.bootstrap4.min.js' ;?>"></script>

<!-- Page level custom scripts -->
<!--  <script src="<?php // echo base_url().'asset/js/demo/datatables-demo.js' ;?>"></script> -->

<!-- Page level plugins -->
<script src="<?php echo base_url().'asset/vendor/chart.js/Chart.min.js' ;?>"></script>

<!-- Page level custom scripts
<script src="<?php //echo base_url().'asset/js/demo/chart-area-demo.js' ;?>"></script>
<script src="<?php //echo base_url().'asset/js/demo/chart-pie-demo.js' ;?>"></script>
<script src="<?php //echo base_url().'asset/js/demo/chart-bar-demo.js' ;?>"></script>
<script src="<?php // echo base_url().'asset/js/demo/datatables-demo.js' ;?>"></script> -->

<!-- Archivos JS -->

<script src="<?php echo base_url().'asset/js/login.js' ;?>"></script>
<script src="<?php echo base_url().'asset/js/perfiles.js' ;?>"></script>
<script src="<?php echo base_url().'asset/js/main_jr.js' ;?>"></script>
<script src="<?php echo base_url().'asset/js/reserva.js' ;?>"></script>
<script src="<?php echo base_url().'asset/js/libro.js' ;?>"></script>
<script src="<?php echo base_url().'asset/js/cliente.js' ;?>"></script>
<script src="<?php echo base_url().'asset/js/prestamo.js' ;?>"></script>
<script src="<?php echo base_url().'asset/js/prueba.js' ;?>"></script>

<script type="text/javascript">
	
	$('#myModal').modal();

		///////////////////////////////////////////////////////

		toastr.options = {
			"closeButton": false,
			"debug": true,
			"newestOnTop": true,
			"progressBar": true,
			"rtl": false,
			"positionClass": "toast-top-right",
			"preventDuplicates": true,
			"onclick": null,
			"showDuration": 300,
			"hideDuration": 1000,
			"timeOut": 5000,
			"extendedTimeOut": 1000,
			"showEasing": "swing",
			"hideEasing": "linear",
			"showMethod": "fadeIn",
			"hideMethod": "fadeOut"
		}

		////////////////////////////////////////////////////////////
		function show5(){
			if (!document.layers&&!document.all&&!document.getElementById)
				return

			var Digital=new Date()
			var hours=Digital.getHours()
			var minutes=Digital.getMinutes()
			var seconds=Digital.getSeconds()

			var dn="Pm"
			if (hours<12)
				dn="Am"
			if (hours>12)
				hours=hours-12
			if (hours==0)
				hours=12

			if (minutes<=9)
				minutes="0"+minutes
			if (seconds<=9)
				seconds="0"+seconds
        //change font size here to your desire
        myclock="<font size='5' face='Arial' ><b><font size='1'>Hora actual:</font></br>"+hours+":"+minutes+":"
        +seconds+" "+dn+"</b></font>"
        if (document.layers){
        	document.layers.liveclock.document.write(myclock)
        	document.layers.liveclock.document.close()
        }
        else if (document.all)
        	liveclock.innerHTML=myclock
        else if (document.getElementById)
        	document.getElementById("liveclock").innerHTML=myclock
        setTimeout("show5()",1000)
    }
    window.onload=show5
    ///////////////////////////////////////////////////////

    $(function(){

    	$('.validarnumeros').keypress(function(e) {
    		if(isNaN(this.value + String.fromCharCode(e.charCode))) 
    			return false;
    	})
    	.on("cut copy paste",function(e){
    		e.preventDefault();
    	});

    });
    /////////////////////////////////////////////////////
    
    $(document).on('change', '.btn-file :file', function() {
    	var input = $(this),
    	label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    	input.trigger('fileselect', [label]);
    });

    $('.btn-file :file').on('fileselect', function(event, label) {

    	var input = $(this).parents('.input-group').find(':text'),
    	log = label;

    	if( input.length ) {
    		input.val(log);
    	} else {
    		if( log ) alert(log);
    	}

    });
    function readURL(input) {
    	if (input.files && input.files[0]) {
    		var reader = new FileReader();

    		reader.onload = function (e) {
    			$('#img-upload').attr('src', e.target.result);
    		}

    		reader.readAsDataURL(input.files[0]);
    	}
    }

    $("#imagenLibro").change(function(){
    	readURL(this);
    });

    /////////////////////////////////////////////////////////////////////////

    
    var flag1 = true;
    $(document).on('keyup','[class=telefono]',function(e){
    	if($(this).val().length == 4 && flag1) {
    		$(this).val($(this).val()+"-");
    		flag1 = false;
    	}
    });

    $(document).on('keyup','[id=dui]',function(e){
    	if($(this).val().length == 8 && flag1) {
    		$(this).val($(this).val()+"-");
    		flag1 = false;
    	}
    });


</script>
<script type="text/javascript">
	var table = $('#tabla1').DataTable({
		language: {
			"decimal": "",
			"emptyTable": "No hay reservas",
			"info": "Mostrando _START_ a _END_ de _TOTAL_ reservas",
			"infoEmpty": "Mostrando 0 de 0 Entradas",
			"infoFiltered": "(Filtrado de _MAX_ total reservas)",
			"infoPostFix": "",
			"thousands": ",",
			"lengthMenu": "Mostrar _MENU_ Reservas",
			"loadingRecords": "Cargando...",
			"processing": "Procesando...",
			"search": "Buscar:",
			"zeroRecords": "Sin resultados encontrados",
			"paginate": {
				"first": "Primero",
				"last": "Ultimo",
				"next": "Siguiente",
				"previous": "Anterior"
			}
		},

	});
</script>
<script type="text/javascript">
	var table = $('#reserva').DataTable({
		language: {
			"decimal": "",
			"emptyTable": "No hay información",
			"info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
			"infoEmpty": "Mostrando 0 de 0 Entradas",
			"infoFiltered": "(Filtrado de _MAX_ total entradas)",
			"infoPostFix": "",
			"thousands": ",",
			"lengthMenu": "Mostrar _MENU_ Entradas",
			"loadingRecords": "Cargando...",
			"processing": "Procesando...",
			"search": "Buscar:",
			"zeroRecords": "Sin resultados encontrados",
			"paginate": {
				"first": "Primero",
				"last": "Ultimo",
				"next": "Siguiente",
				"previous": "Anterior"
			}
		},

	});
</script>
<script type="text/javascript">
	var table = $('#tabla2').DataTable({
		language: {
			"decimal": "",
			"emptyTable": "No hay información",
			"info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
			"infoEmpty": "Mostrando 0 de 0 Entradas",
			"infoFiltered": "(Filtrado de _MAX_ total entradas)",
			"infoPostFix": "",
			"thousands": ",",
			"lengthMenu": "Mostrar _MENU_ Entradas",
			"loadingRecords": "Cargando...",
			"processing": "Procesando...",
			"search": "Buscar:",
			"zeroRecords": "Sin resultados encontrados",
			"paginate": {
				"first": "Primero",
				"last": "Ultimo",
				"next": "Siguiente",
				"previous": "Anterior"
			}
		},

	});
</script>
<script type="text/javascript">
	var table = $('#Prestamo').DataTable({
		language: {
			"decimal": "",
			"emptyTable": "No hay información",
			"info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
			"infoEmpty": "Mostrando 0 de 0 Entradas",
			"infoFiltered": "(Filtrado de _MAX_ total entradas)",
			"infoPostFix": "",
			"thousands": ",",
			"lengthMenu": "Mostrar _MENU_ Entradas",
			"loadingRecords": "Cargando...",
			"processing": "Procesando...",
			"search": "Buscar:",
			"zeroRecords": "Sin resultados encontrados",
			"paginate": {
				"first": "Primero",
				"last": "Ultimo",
				"next": "Siguiente",
				"previous": "Anterior"
			}
		},

	});
</script>
<script type="text/javascript">
	var table = $('#hreserva').DataTable({
		language: {
			"decimal": "",
			"emptyTable": "No hay información",
			"info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
			"infoEmpty": "Mostrando 0 de 0 Entradas",
			"infoFiltered": "(Filtrado de _MAX_ total entradas)",
			"infoPostFix": "",
			"thousands": ",",
			"lengthMenu": "Mostrar _MENU_ Entradas",
			"loadingRecords": "Cargando...",
			"processing": "Procesando...",
			"search": "Buscar:",
			"zeroRecords": "Sin resultados encontrados",
			"paginate": {
				"first": "Primero",
				"last": "Ultimo",
				"next": "Siguiente",
				"previous": "Anterior"
			}
		},

	});
</script>
<script type="text/javascript">
	var table = $('#hprestamo').DataTable({
		language: {
			"decimal": "",
			"emptyTable": "No hay información",
			"info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
			"infoEmpty": "Mostrando 0 de 0 Entradas",
			"infoFiltered": "(Filtrado de _MAX_ total entradas)",
			"infoPostFix": "",
			"thousands": ",",
			"lengthMenu": "Mostrar _MENU_ Entradas",
			"loadingRecords": "Cargando...",
			"processing": "Procesando...",
			"search": "Buscar:",
			"zeroRecords": "Sin resultados encontrados",
			"paginate": {
				"first": "Primero",
				"last": "Ultimo",
				"next": "Siguiente",
				"previous": "Anterior"
			}
		},

	});
</script>
</body>
</html>