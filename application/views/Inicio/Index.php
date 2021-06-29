
<body class="principal">
  <br>
  <div id="demo" class="carousel slide" data-ride="carousel" align="center">
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?php echo base_url('asset/img/bi.jpg');?>" class="q" alt="..." alt="Los Angeles" width="1100" height="500">
        <div class="carousel-caption p">
          <h3>Biblioteca</h3>
          <p>¡Es un placer Atenderle!</p>
        </div>   
      </div>
      <div class="carousel-item">
        <img src="<?php echo base_url('asset/img/bli.jpg');?>" class="q" alt="..." alt="Chicago" width="1100" height="500">
        <div class="carousel-caption p">
          <h3>Biblioteca</h3>
          <p>¡Disfrute de Nuestro extenso catalogo de libros!</p>
        </div>   
      </div>
      <div class="carousel-item">
        <img src="<?php echo base_url('asset/img/blio.jpg');?>" class="q" alt="..." alt="New York" width="1100" height="500">
        <div class="carousel-caption p">
          <h3>Biblioteca</h3>
          <p>¡Es un placer Atenderle!</p>
        </div>   
      </div>
    </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div><br>
  <br>
  <h3 align="center" style="color: white;font-size: 60px " class="texto-borde p">GENEROS</h3>
  <div class="accordian">
    <ul>
      <li>
        <div class="image_title">
          <a href="<?php echo base_url();?>inicio_C/terrorV" class="opa p">Terror</a>
        </div>
        <a href="<?php echo base_url();?>inicio_C/terrorV">
          <img style="height: 420px;" src="<?php echo base_url('asset/img/print.png');?>">
        </a>
      </li>
      <li>
        <div class="image_title">
          <a href="<?php echo base_url();?>inicio_C/infantilV" class="opa p">Infantil</a>
        </div> 
        <a href="<?php echo base_url();?>inicio_C/infantilV">
          <img style="height: 420px;" src="<?php echo base_url('asset/img/prini.png');?>">
        </a>
      </li>
      <li>
        <div class="image_title">
          <a href="<?php echo base_url();?>inicio_C/romanticoV" class="opa p">Romantico</a>
        </div>
        <a href="<?php echo base_url();?>inicio_C/romanticoV">
          <img style="height: 420px;" src="<?php echo base_url('asset/img/prir.jpg');?>">
        </a>
      </li>
      <li>
        <div class="image_title">
          <a href="<?php echo base_url();?>inicio_C/accionV" class="opa p">Accion</a>
        </div>
        <a href="<?php echo base_url();?>inicio_C/accionV">
          <img style="height: 420px; "src="<?php echo base_url('asset/img/prina.jpg');?>">
        </a>
      </li>
      <li>
        <div class="image_title">
          <a href="<?php echo base_url();?>inicio_C/aventuraV" class="opa p">Aventuras</a>
        </div>
        <a href="<?php echo base_url();?>inicio_C/aventuraV">
          <img style="height: 420px;" src="<?php echo base_url('asset/img/prinav.jpg');?>">
        </a>
      </li>
      <li>
        <div class="image_title">
          <a href="<?php echo base_url();?>inicio_C/comicsV" class="opa p">Comics</a>
        </div>
        <a href="<?php echo base_url();?>inicio_C/comicsV">
          <img style="height: 420px;"  src="<?php echo base_url('asset/img/comics.jpg');?>">
        </a>
      </li>
      <li>
        <div class="image_title">
          <a href="<?php echo base_url();?>inicio_C/ficcionV" class="opa p">Ficcion</a>
        </div>
        <a href="<?php echo base_url();?>inicio_C/ficcionV">
          <img style="height: 420px;"  src="<?php echo base_url('asset/img/ficcion.jpg');?>">
        </a>
      </li>
      <li>
        <div class="image_title">
          <a href="<?php echo base_url();?>inicio_C/humorV" class="opa p">Humor</a>
        </div> 
        <a href="<?php echo base_url();?>inicio_C/humorV">
          <img style="height: 420px; "src="<?php echo base_url('asset/img/humor.jpg');?>">
        </a>
      </li>
    </ul>
  </div>
  <!-- Icons Grid -->
  <section class="features-icons bg-light text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-screen-desktop m-auto text-primary"></i>
            </div>
            <h3>Desde cualquier ordenador!</h3>
            <p class="lead mb-0">Puedes obtener el libro que desees prestar desde tu ordenador.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-layers m-auto text-primary"></i>
            </div>
            <h3>Muchos Libros!</h3>
            <p class="lead mb-0">Tenemos un muy extenzo catalogo de los mejores libros de la historia.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-check m-auto text-primary"></i>
            </div>
            <h3>Excelente servicio</h3>
            <p class="lead mb-0">Nuestro sistema de trabajo es 100% seguro y confiable.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Image Showcases -->
  <section class="showcase">
    <div class="container-fluid p-0">
      <div class="row no-gutters">

        <div class="order-lg-2 text-white showcase-img" style="background-image: url('img/bg-showcase-1.jpg');"></div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text card p" style="border-radius: 1em;">
          <h2 style="color: #197D89; padding-left: 260px;font-size: 40px"><li>Paso 1️</li></h2>
          <p class="lead mb-0"  style="color: gray ; padding-left: 30px;font-size: 25px"> - Dirigete a la parte superior de la pagina y selecciona "Registrarse", que se encuentra del lado derecho.</p>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 text-white showcase-img" style="background-image: url('img/bg-showcase-2.jpg');"></div>
        <div class="col-lg-6 my-auto showcase-text card p" style="border-radius: 1em;">
          <h2 style="color: #197D89; padding-left: 260px;font-size: 40px"><li>Paso 2</li></h2>
          <p class="lead mb-0" style="color: gray ; padding-left: 30px;font-size: 25px"> - Llena el formulario con los datos que te son solicitados, recuerda ser sincero y cuidadoso a la hora de ingresar tus datos y asi nosotros podremos trabajar de la mejor manera con tigo.</p>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/bg-showcase-3.jpg');"></div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text card p" style="border-radius:1em;">
          <h2 style="color: #197D89; padding-left: 260px;font-size: 40px"><li>Paso 3</li></h2>
          <p class="lead mb-0" style="color: gray ; padding-left: 30px;font-size: 25px"> - En la pagina principal selecciona "Iniciar sesion", que se encuentra en la parte superior derecha de tu pantalla, y luego solo ingresa con la direccion y contraseña que definiste anteriormente y estaras listo para obtener los libros que más te gusten.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section class="testimonials text-center bg-light">
    <div class="container">
      <h2 class="mb-5">Nuestros Fundadores</h2>
      <div class="row">
        <div class="col-lg-3">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="<?php echo base_url('asset/img/alv.png');?>" alt="">
            <h5>Jose Alvaro Guerra</h5>
            <!-- <p class="font-weight-light mb-0">"This is fantastic! Thanks so much guys!"</p> -->
          </div>
        </div>
        <div class="col-lg-3">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="<?php echo base_url('asset/img/benj.png');?>" alt="">
            <h5>Israel Benjamin Zuleta</h5>
            <!-- <p class="font-weight-light mb-0">"This is fantastic! Thanks so much guys!"</p> -->
          </div>
        </div>
        <div class="col-lg-3">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="<?php echo base_url('asset/img/cris.png');?>" alt="">
            <h5>Cristina Isabel</h5>
            <!-- <p class="font-weight-light mb-0">"Bootstrap is amazing. I've been using it to create lots of super nice landing pages."</p> -->
          </div>
        </div>
        <div class="col-lg-3">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="<?php echo base_url('asset/img/sal.png');?>" alt="">
            <h5>Salvador García</h5>
            <!-- <p class="font-weight-light mb-0">"Thanks so much for making these free resources available to us!"</p> -->
          </div>
        </div>
      </div>
    </div>
  </section>
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