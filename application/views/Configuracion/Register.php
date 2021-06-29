
<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">

              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">¡Crea una cuenta!</h1>
              </div>

              <form class="user">
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="nombreClienteLR" placeholder="Nombre Completo" minlength="0" maxlength="50">
                </div>

                <div class="form-group row">
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="usuarioClienteLR" placeholder="Usuario" minlength="0" maxlength="20">
                  </div>
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="passClienteLR" placeholder="Contraseña" minlength="0" maxlength="20">
                  </div>
                </div>

                <div class="form-group">
                  <input type="email" class="form-control form-control-user" id="emailClienteLR" placeholder="Email Address" minlength="0" maxlength="50">
                </div>

                <div class="form-group row">
                  <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="hidden" id="hoyCliente" value="<?php echo date('Y-m-d') ?>">
                    <input type="date" class="form-control form-control-user" id="nacimientoClienteLR" placeholder="Fecha de Nacimiento" value="<?php echo date('2000-12-31') ?>" max="<?php echo date('2001-01-01') ?>">
                  </div>
                  <div class="col-sm-4">
                    <input type="text" class="form-control form-control-user validarnumeros" id="telefonoClienteLR" placeholder="Telefono" minlength="0" maxlength="8">
                  </div>
                  <div class="col-sm-4">
                    <input type="text" class="form-control form-control-user" id="sexoClienteLR" placeholder="Sexo" minlength="0" maxlength="15">
                    <!-- <select class="form-control form-control-user" id="sexoCliente">
                      <option value="">---</option>
                    </select> -->
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="duiClienteLR" placeholder="Documento Unico de Identidad" minlength="0" maxlength="10">
                  </div>
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="direccionClienteLR" placeholder="Direccion" minlength="0" maxlength="100">
                  </div>
                </div>

                <hr>
                <input type="button" class="btn btn-primary btn-user btn-block" id="registrar_Login" value="Registrar Cuenta">
                <!-- <input type="button" class="btn btn-primary btn-user btn-block" id="agregar_cliente" value="Guardar"> -->
                
                <!-- <a href="index.html" class="btn btn-google btn-user btn-block">
                  <i class="fab fa-google fa-fw"></i> Register with Google
                </a>
                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                  <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                </a> -->
              </form>
              <hr>
              <!-- <div class="text-center">
                <a class="small" href="forgot-password.html">¿Se te olvidó tu contraseña?</a>
              </div> -->
              <div class="text-center">
                <a class="small" href="<?php echo base_url() ;?>Login_C/loginC">¿Ya tienes una cuenta? ¡Iniciar sesión!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</body>
