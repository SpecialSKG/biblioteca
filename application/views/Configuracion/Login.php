<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">

                  <div>
                    <h2 class="text-center">Bienvenid@</h2>

                  <form class="user" id="login" role="form" method="post" action="<?php echo base_url(); ?>Login_C/login_user">

                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="user" aria-describedby="emailHelp" placeholder="Introduzca su Usuario...">
                    </div>

                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" name="pass" placeholder="Introduzca su Contraseña...">
                    </div>

                    <div class="form-group">
                      <?php
                      $success_msg= $this->session->set_flashdata('success_msg');
                      $error_msg= $this->session->set_flashdata('error_msg');

                      if($success_msg){ ?>
                        <div class="alert alert-success">
                          <?php echo $success_msg; ?>
                        </div>

                      <?php } if($error_msg){ ?>
                        <div class="alert alert-danger">
                          <?php echo $error_msg; ?>
                        </div>
                      <?php } ?>
                    </div>
                    <hr>
                    <button type="submit" name="login" class="btn btn-primary btn-user btn-block">Iniciar sesión</button>
                  </form>
                  <!-- <div class="text-center">
                    <a class="small" href="forgot-password.html">¿Se te olvidó tu contraseña?</a>
                  </div> -->
                  <div class="text-center">
                    <a class="small" href="<?php echo base_url() ;?>Login_C/registerC">¡Crea una cuenta!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
</div>

</body>

<!-- <?php //if($this->session->userdata('rol')==='1'): ?>
  <font></font>
  <li class="active"><a href="#">Dashboard</a></li><font></font> 
  <li><a href="#">Posts</a></li><font></font>
  <li><a href="#">Pages</a></li><font></font>
  <li><a href="#">Media</a></li><font></font>
  ACCESS MENUS FOR STAFF<font></font>
  <?php// elseif($this->session->userdata('rol')==='2'):?><font></font>
  <li class="active"><a href="#">Dashboard</a></li><font></font>
  <li><a href="#">Pages</a></li><font></font>
  <li><a href="#">Media</a></li><font></font>
  ACCESS MENUS FOR AUTHOR-<font></font>
  <?php// else:?><font></font>
  <li class="active"><a href="#">Dashboard</a></li><font></font>
  <li><a href="#">Posts</a></li><font></font>
  <?php// endif;?><font></font>
</ul><font></font>
<ul class="nav navbar-nav navbar-right"><font></font>
  <li><a href="<?php// echo base_url('Login_C/logout');?>">Cerrar Sesion</a></li><font></font>
</ul><font></font>
</div>/.nav-collapse <font></font>
</div>/.container-fluid <font></font>
</nav><font></font>
<font></font> -->