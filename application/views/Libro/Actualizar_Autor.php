<br>
<!-- Page Wrapper -->
<div id="wrapper">

  <!-- Content Wrapper -->
  <div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 offset-lg-3">
            <div class="card text-white border-dark shadow mb-4">

              <div class="modal-body text-center">

                <div class="form-row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="text-gray-800">Nombre Completo
                        <span class="text-danger">*</span>
                      </label>
                      <input type="text" id="nombreAutorU" class="form-control" minlength="0" maxlength="50" value="<?= $aut->nombre ;?>">
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="text-gray-800">Nacimiento
                        <span class="text-danger">*</span>
                      </label>
                      <input type="date" id="nacimientoAutorU" class="form-control" min="" max="<?php echo date('Y-m-d') ?>" value="<?= $aut->fecha_nacimiento ;?>">
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="text-gray-800">Nacionalidad
                        <span class="text-danger">*</span>
                      </label>
                      <select class="form-control select" id="nacionalidadAutorU">
                        <option value=""></option>
                        <?php foreach ($nacionalidad as $n): ?>
                          <option value="<?= $n->id_pais ;?>"<?= $n->id_pais == $aut->id_pais  ? 'selected': '' ?>>
                            <?= $n->pais ;?>
                          </option>
                        <?php endforeach ;?>
                      </select>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="text-gray-800">Sexo
                        <span class="text-danger">*</span>
                      </label>
                      <input type="text" id="sexoAutorU" class="form-control" minlength="0" maxlength="20" value="<?= $aut->sexo ;?>">
                    </div>
                  </div>

            <!-- <div class="col-md-6">
              <div class="form-group">
                <label class="text-gray-800">Foto
                  <span class="text-danger">*</span>
                </label>
                <input type="file" id="fotoAutorU">
              </div>
            </div> -->

            <div class="col-md-12">
              <input type="hidden" id="idAutorU" value="<?= $aut->id_autor ;?>">
              <input type="button" class="btn btn-primary btn-lg" id="editar_Autor" value="Guardar Perfil">
              <br><br>
              <a href="<?php echo base_url();?>Libro_C/autorLibro" class="btn btn-outline-success btn-sm text-dark" style="float: center;">Retroceder</a>
            </div>

          </div>
        </div>

      </div>
    </div>
  </div>

</div>


</div>

</div>

</div>