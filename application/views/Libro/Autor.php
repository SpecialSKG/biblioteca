
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
              <h1 class="h2 mb-2 text-gray-800 text-center">Autores</h1>

              <div class="text-right">
                <button type="button" class="btn btn-primary right" data-toggle="modal" data-target="#agregarAutor">
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
                          <th>Nacimiento</th>
                          <th>Nacionalidad</th>
                          <th>Sexo</th>
                          <!-- <th>Foto</th> -->
                          <th></th>

                        </tr>
                      </thead>

                      <tbody>
                       <?php foreach ($autor as $a): ?>
                        <tr>
                          <td><?=$a->nombre ?></td>
                          <td><?=$a->fecha_nacimiento ?></td>
                          <td><?=$a->pais ?></td>
                          <td><?=$a->sexo ?></td>
                          <!-- <td>
                            <img style=" border: 1px solid #ddd;border-radius: 4px;padding: 5px;width: 150px;" value="<?=$a->foto_autor ?>" />
                          </td> -->
                          <td>
                            <!-- <button class="btn btn-outline-danger" data-toggle="modal" data-target="#editarAutor" onclick="obtenerA(<?=$a->id_autor ?>)"><i class="fas fa-edit"></i></button> -->
                            
                            <a class="btn btn-outline-danger" href="<?php echo base_url().'Libro_C/obtenerAutor/'.$a->id_autor ;?>"><i class="fas fa-edit"></i></a>
                            <span>-</span>
                            <a class="btn btn-outline-primary" href="<?php echo base_url().'Libro_C/eliminarAutores/'.$a->id_autor ;?>"><i class="fas fa-trash-alt"></i></a>
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