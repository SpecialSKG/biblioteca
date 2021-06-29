
<body id="page-top" class="re">

  <!-- Page Wrapper -->
  <div id="wrer">

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <div class="row">
            <div class="col-lg-10 offset-lg-1">
              <br>

              <!-- Page Heading -->
              <h1 class="h2 mb-2  text-center p texto-borde" style="font-size: 70px; color: white">PRESTAMOS</h1>
              <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
              </p> -->

              

              <!-- DataTales Example -->
              <div class="card shadow mb-4">
                <!-- <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                </div> -->

                <div class="card-body">

                  <div class="table-responsive">

                    <table class="table table-bordered table-hover text-center p" id="Prestamo" width="100%" cellspacing="0">
                      <thead class="thead-light">
                        <tr>
                          <th>Libro Reservado</th>
                          <th>DUI Cliente</th>
                          <th>Cantidad</th>
                          <th>Entrega</th>
                          <th>Devolucion</th>
                        </tr>
                      </thead>

                      <tbody>
                        <?php foreach ($presta as $r): ?>
                          <tr>
                            <td><?= $r->titulo?></td>
                            <td><?= $r->dui?></td>
                            <td><?= $r->cantidades?></td>
                            <td><?= $r->fecha_prestamo?></td>
                            <td><?= $r->fecha_entregap?></td>
                            
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
  <br><br><br><br><br><br><br><br><br><br>
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