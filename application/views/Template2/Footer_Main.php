<!-- Footer -->
<!-- <footer class="footer bg-light">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 h-100 text-center text-lg-left my-auto">
				<ul class="list-inline mb-2">
					<li class="list-inline-item">
						<a href="#">About</a>
					</li>
					<li class="list-inline-item">&sdot;</li>
					<li class="list-inline-item">
						<a href="#">Contact</a>
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
</footer> -->

<!-- Bootstrap core JavaScript -->
<script src="<?php echo base_url() ;?>pages/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url() ;?>pages/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- //////////////////// -->
<script src="<?php echo base_url().'asset/js/toastr.js' ;?>"></script>
<script src="<?php echo base_url().'asset/js/sweetalert2.min.js' ;?>"></script>
<!-- Core plugin JavaScript-->
<script src="<?php echo base_url().'asset/vendor/jquery-easing/jquery.easing.min.js' ;?>"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo base_url().'asset/js/sb-admin-2.min.js' ;?>"></script>

<script src="<?php echo base_url().'asset/js/login.js' ;?>"></script>
<script src="<?php echo base_url().'asset/js/usuario.js' ;?>"></script>
<script src="<?php echo base_url().'asset/js/main_jr.js' ;?>"></script>

<script type="text/javascript">
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
	</script>
</body>
</html>