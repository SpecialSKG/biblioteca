
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
              <h1 class="h2 mb-2 text-gray-800 text-center">Editorial</h1>

              <div class="text-right">
                <button type="button" class="btn btn-primary right" data-toggle="modal" data-target="#agregarEditorial">
                  Agregar
                </button>
              </div>

              <!-- DataTales Example -->
              <div class="card text-white border-dark shadow mb-4">
                <!-- <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                </div> -->

                <div class="card-body">
                  <div class="table-responsive">

                    <table class="table table-bordered table-hover text-center" id="tabla2" width="100%" cellspacing="0">
                      <thead class="thead-light">
                        <tr>
                          <th>Editorial</th>
                          <th>Pais</th>
                          <th>Direccion</th>
                          <th>Telefono</th>
                         <th></th>

                       </tr>
                     </thead>

                     <tbody>
                       <?php foreach ($editorial as $e): ?>
                        <tr>
                          <td><?=$e->Editorial_e ?></td>
                          <td><?=$e->Pais_e ?></td>
                          <td><?=$e->Direccion_e ?></td>
                          <td><?=$e->Telefono_e ?></td>
                          <td>
                            <a class="btn btn-outline-danger" href="<?php echo base_url().'Libro_C/obtEditorial/'.$e->id_editorial ;?>"><i class="fas fa-edit"></i></a>
                            <br>
                            <a class="btn btn-outline-primary" href="<?php echo base_url().'Libro_C/eliminarEditorial/'.$e->id_editorial ;?>"><i class="fas fa-trash-alt"></i></a>
                          </td>
                        </tr>
                      <?php endforeach ?>
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
</body>

<!-- </body> -->
</html>