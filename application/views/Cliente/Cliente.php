
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
            <div class="col-lg-8 offset-lg-2">
              <br>

              <!-- Page Heading -->
              <h1 class="h2 mb-2 text-gray-800 text-center">Clientes</h1>
              <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
              </p> -->

              <div class="text-right">
                <button type="button" class="btn btn-primary right" data-toggle="modal" data-target="#AgregarCliente">
                  Agregar
                </button>
              </div>

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
                          <th>Nombre</th>
                          <th>Usuario</th>
                          <th>DUI</th>
                          <th></th>
                          <th></th>
                        </tr>
                      </thead>

                      <tbody>
                        <?php foreach($cliente as $a): ?>
                          <tr>
                            <td><?=$a->nombre ?></td>
                            <td><?=$a->nombre_usuario ?></td>
                            <td><?=$a->dui ?></td>
                            <td>
                              <a class="btn btn-outline-primary" href="<?php echo base_url(). 'Cliente_C/verClientes/'.$a->dui ?>">
                                <i class="fas fa-plus"></i>
                              </a>
                            </td>
                            <td>
                              <a class="btn btn-outline-danger" href="<?php echo base_url(). 'Cliente_C/eliminarCliente/'.$a->dui ?>">
                                <i class="fas fa-trash-alt"></i>
                              </a>

                              <a class="btn btn-outline-primary" href="<?php echo base_url(). 'Cliente_C/editarClientes/'.$a->dui ?>">
                                <i class="fas fa-edit"></i>
                              </a>
                              <!-- <button type="button" class="btn btn-outline-primary right" data-toggle="modal" data-target="#Actualizar_Perfil" href="<?php //echo base_url().'Configuracion_C/perfilesObt/'. $k->id_user;?>">
                                <i class="fas fa-edit"></i>
                              </button> -->
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
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

</body>