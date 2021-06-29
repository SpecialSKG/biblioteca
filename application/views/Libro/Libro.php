
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
            <div class="col-lg-12 offset-lg-0">
              <br>

              <!-- Page Heading -->
              <h1 class="h2 mb-2 text-gray-800 text-center">Libros</h1>

              <?php if ($this->session->userdata('rol_') === '1' && '2'): ?>
                <div class="text-right">
                  <button type="button" class="btn btn-primary right" data-toggle="modal" data-target="#agregar_Libro">
                    Agregar
                  </button>
                  <!--  -->
                  <a  class="btn btn-secondary right" href="<?php echo base_url(); ?>Reporte_C/index">Reporte PDF</a>
                </div>
              <?php endif; ?>

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
                          <?php if ($this->session->userdata('rol_') === '2'): ?>
                            <th><i class="fas fa-cogs"></i></th>
                          <?php endif; ?>
                          <th>Reservar</th>
                          <?php if ($this->session->userdata('rol_') === '2'): ?>
                            <th>Prestar</th>
                          <?php endif; ?>

                        </tr>
                      </thead>

                      <tbody>
                        <?php foreach ($libro as $l){ ?>       
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
                            <?php if ($this->session->userdata('rol_') === '2'): ?>
                              <td>
                                <a class="btn btn-outline-primary" href="<?php echo base_url().'Libro_C/eliminarLibro/'.$l->id_libro ;?>"><i class="fas fa-trash-alt"></i>
                                </a>
                                <br>
                                <a class="btn btn-outline-danger" href="<?php echo base_url().'Libro_C/formularioActualizar/'.$l->id_libro ;?>"><i class="fas fa-edit"></i>
                                </a>
                              </td>
                            <?php endif; ?>

                            <?php if ($l->stock > 0) { ?>
                              <td>
                                <a class="btn btn-success" href="<?php echo base_url('reserva_c/reserva_form/').$l->id_libro;?>">Reservar</a>
                              </td>
                            <?php } else { ?>
                              <td >
                                <h6 class="btn btn-danger"><?php echo "Agotado" ?></h6>
                              </td>
                            <?php } ?>

                            <?php if ($this->session->userdata('rol_') === '2'): ?>
                              <?php if ($l->stock > 0) { ?>
                                <td>
                                  <a class="btn btn-success" href="<?php echo base_url('prestamo_c/prestamo_form/').$l->id_libro;?>">Prestar</a>
                                </td>
                              <?php } else { ?>
                                <td >
                                  <h6 class="btn btn-danger"><?php echo "Agotado" ?></h6>
                                </td>
                              <?php } ?>
                            <?php endif; ?>
                          </tr>
                        <?php } ?> 
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>..

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