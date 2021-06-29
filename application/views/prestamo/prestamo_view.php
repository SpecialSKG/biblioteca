
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

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
              <h1 class="h2 mb-2 text-gray-800 text-center">Prestamos</h1>
              <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
              </p> -->

             

              <!-- DataTales Example -->
              <div class="card shadow mb-4">
                <!-- <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                </div> -->

                <div class="card-body">

                  <div class="table-responsive">

                    <table class="table table-bordered table-hover text-center" id="Prestamo" width="100%" cellspacing="0">
                      <thead class="thead-light">
                        <tr>
                          <th>Libro Reservado</th>
                          <th>DUI Cliente</th>
                          <th>Cantidad</th>
                          <th>Entrega</th>
                          <th>Devolucion</th>
                          <th>Editar Prestamo</th>
                          <th>Fin del Prestamo</th>
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
							<td>
                  <a href="<?php echo base_url() . 'prestamo_c/obtener_prestamo/' . $r->id_prestamo ?>" class="form-control btn-primary">ACTUALIZAR</i>
                </a>
							</td>
              <td>
                <a href="<?php echo base_url() . 'prestamo_c/eliminar_prestamo/' . $r->id_prestamo ?>" class="form-control btn-primary">DEVOLVER
                </a>
              </td>
                          
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
  

</body>