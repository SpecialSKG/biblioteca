<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Login</title>
</head>
<body>

  <section class="login-block">
    <div class="container">
      <div class="row">
        <div class="col-md-4 login-sec">
          <h2 class="text-center">Login</h2>
          <?php
          $success_msg= $this->session->flashdata('success_msg');
          $error_msg= $this->session->flashdata('error_msg');

          if($success_msg){
            ?>
            <div class="alert alert-success">
              <?php echo $success_msg; ?>
            </div>
            <?php
          }
          if($error_msg){
            ?>
            <div class="alert alert-danger">
              <?php echo $error_msg; ?>
            </div>
            <?php
          }
          ?>
          <form id="login" role="form" method="post" action="<?php echo base_url(); ?>Login_C/login_user">

            <?php echo $this->session->flashdata('msg');?>

            <div class="form-group">
              <label for="exampleInputEmail1" class="text-uppercase">Usuario</label>
              <input type="text" name="user" class="form-control" placeholder="usuario">
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1" class="text-uppercase">Contraseña</label>
              <input type="password" name="pass" class="form-control" placeholder="Password" >
            </div>


            <div class="form-check">
              <label class="form-check-label">
                <input type="checkbox" class="form-check-input">
                <small>Remember Me</small>
              </label>
              <button type="submit" name="login" class="btn btn-login float-right">INGRESAR</button>
            </div>
            </form>
        </div>
      </div>
    </div>
  </div>


</body>
</html>