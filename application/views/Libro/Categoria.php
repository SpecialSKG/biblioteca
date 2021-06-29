
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
            <div class="col-lg-6 offset-lg-3">
              <br>

              <!-- Page Heading -->
              <h1 class="h2 mb-2 text-gray-800 text-center">Categorias</h1>

              <div class="text-right">
                <button type="button" class="btn btn-primary right" data-toggle="modal" data-target="#agregarCategoria">
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
                          <th>Categoria</th>
                          <th></th>

                        </tr>
                      </thead>

                      <tbody>
                       <?php foreach ($categoria as $c): ?>
                        <tr>
                          <td>
                            <?=$c->categoria ?>
                          </td>
                          <td>
                            <a class="btn btn-outline-danger" href="<?php echo base_url().'Libro_C/formActualizarCategoria/'.$c->id_categoria ;?>"><i class="fas fa-edit"></i></a>
                            <span>-</span>
                            <a class="btn btn-outline-primary" href="<?php echo base_url().'Libro_C/eliminarCategoria/'.$c->id_categoria ;?>"><i class="fas fa-trash-alt"></i></a>
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