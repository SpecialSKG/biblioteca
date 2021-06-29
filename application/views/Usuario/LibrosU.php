<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body class="foo">

  <!-- Page Wrapper -->
  <div>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <div class="row">
            <div class="col-lg-12 offset-lg-0">
              <br><br>

              <!-- Page Heading -->
              <h1 class="h2 mb-2 text-center texto-borde p" style="color: white; font-size: 80px">Libros</h1>
              <br>
              <!-- DataTales Example -->
              <div class="card shadow mb-4">
                <!-- <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                </div> -->

                <div class="card-body">
                  <div class="table-responsive">

                    <table class="table table-bordered table-hover text-center" id="tabla2" width="100%" cellspacing="0">
                      <thead class="thead-light">
                        <tr>
                          <th>Identificador</th>
                          <th>Titulo</th>
                          <th>Categoria</th>
                          <th>Autor</th>
                          <th>Fecha de Lanzamiento</th>
                          <th>Editorial</th>
                          <th>Imagen</th>
                          <th>Stock</th>
                          <th>Reservar</th>
                          <th>Prestar</th>

                        </tr>
                      </thead>

                      <tbody>
                        <?php foreach ($libro as $l):?>       
                          <tr>
                            <td><?=$l->identificador ?></td>
                            <td><?=$l->titulo ?></td>
                            <td><?=$l->categoria ?></td>
                            <td><?=$l->nombre ?></td>
                            <td><?=$l->fecha_lanzamiento ?></td>
                            <td><?=$l->Editorial_e ?></td>
                            <td>
                              <img src="<?php echo base_url('asset/img/') ?><?= $l->imagen ?>" alt="" style="width: 100px">
                            </td>
                            <td><?=$l->stock ?></td>

                            <?php if ($l->stock > 0) { ?>
                              <td>
                                <a class="btn btn-success" href="<?php echo base_url('Usuario_C/reservaform/').$l->id_libro;?>">RESERVAR</a>
                              </td>
                            <?php } else { ?>
                              <td >
                                <h6 class="btn btn-danger"><?php echo "Agotado" ?></h6>
                              </td>
                            <?php } ?>
                            <?php if ($l->stock > 0) { ?>
                              <td>
                                <a class="btn btn-success" href="<?php echo base_url('Usuario_C/prestamoForm/').$l->id_libro;?>">PRESTAR</a>
                              </td>
                            <?php } else { ?>
                              <td >
                                <h6 class="btn btn-danger"><?php echo "Agotado" ?></h6>
                              </td>
                            <?php } ?>
                          </tr>
                        <?php endforeach; ?> 
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>

            </div>
          </div>
          
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
<br><br><br><br>
  <!-- Page level custom scripts -->
<!-- Footer -->
  <footer class="footer bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
          <ul class="list-inline mb-2">
            <li class="list-inline-item"><br>
              <h4><a href="#"><i class="fas fa-map-marker-alt"> Centro, San Salvador, El Salvador</i></a></h4>
            </li><br><br>
            <li class="list-inline-item">
              <h4><a href="#"><i class="fas fa-phone-alt"> (+503) 2547-8946</i></a></h4>
            </li>
          </ul><br>
          <ul class="list-inline mb-2">
            <li class="list-inline-item">
              <a href="#">About</a>
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
  </footer>
</body>

<!-- </body> -->
</html>