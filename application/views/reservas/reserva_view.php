
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
              <h1 class="h2 mb-2 text-gray-800 text-center">Reservas</h1>
              <!-- <p class="mb-4">DataTables is a third party plugin that is used toA generate the demo table below. For more information about DataTables, please visit the
              </p> -->

              

              <!-- DataTales Example -->
              <div class="card shadow mb-4">
                <!-- <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                </div> -->

                <div class="card-body">

                  <div class="table-responsive">

                    <table class="table table-bordered table-hover text-center" id="reserva" width="100%" cellspacing="0">
                      <thead class="thead-light">
                        <tr>
                          <th>Libro Reservado</th>
                          <th>DUI Cliente</th>
                          <th>Cantidad</th>
                          <th>Entrega</th>
                          <th>Devolucion</th>
                          <?php if ($this->session->userdata('rol_') <= '2'): ?>
                            <th>Enviar Rererva</th>
                          <?php endif ; ?>
                          <!-- <th></th> -->
                        </tr>
                      </thead>

                      <tbody>
                        <?php foreach ($reserva as $r): ?>
                          <tr>
                            <td><?= $r->titulo?></td>
                            <td><?= $r->dui?></td>
                            <td><?= $r->cantidad?></td>
                            <td><?= $r->fecha_salida?></td>
                            <td><?= $r->fecha_entrega?></td>
                            <?php if ($this->session->userdata('rol_') <= '2'): ?>
                              <td>
                                <a href="<?php echo base_url() . 'reserva_c/eliminar_reserva/' . $r->id_reserva ?>" class="form-control btn-primary">Prestamo<i class="fas fa-paper-plane"></i>
                                </a>
                                <br>
                                <a href="<?php echo base_url() . 'reserva_c/obtener_reserva/' . $r->id_reserva ?>" class="form-control btn-primary">Actualizar</i>
                                </a>
                              </td>
                            <?php endif ; ?>
                            <!--<td>
                               <button type="button" class="btn btn-outline-primary right" data-toggle="modal" data-target="#Actualizar_Perfil" href="<?php //echo base_url().'Configuracion_C/perfilesObt/'. $k->id_user;?>">
                                <i class="fas fa-edit"></i>
                              </button>
                            </td> -->
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