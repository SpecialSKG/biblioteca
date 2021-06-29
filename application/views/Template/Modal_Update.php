<!-- Modal Actualizar Autor --------------------------------------------->

<div class="modal fade" id="editarAutor" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Editar Autores</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body text-center">

        <div class="form-row">
          <div class="col-md-12">
            <div class="form-group">
              <label>Nombre Completo
                <span class="text-danger">*</span>
              </label>
              <input type="text" id="nombreAutorU" class="form-control" minlength="0" maxlength="50">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Nacimiento
                <span class="text-danger">*</span>
              </label>
              <input type="date" id="nacimientoAutorU" class="form-control" min="" max="<?php echo date('Y-m-d') ?>">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Nacionalidad
                <span class="text-danger">*</span>
              </label>
              <select class="form-control select" id="nacionalidadAutorU">
                <option value=""></option>
                <?php foreach ($nacionalidad as $n): ?>
                  <option value="<?= $n->id_pais ;?>">
                    <?= $n->pais ;?>
                  </option>
                <?php endforeach ;?>
              </select>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Sexo
                <span class="text-danger">*</span>
              </label>
              <input type="text" id="sexoAutorU" class="form-control" minlength="0" maxlength="20">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Foto
                <span class="text-danger">*</span>
              </label>
              <input type="file" id="fotoAutorU">
            </div>
          </div>
        </div>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <input type="button" class="btn btn-primary" id="editar_Autor" value="Guardar Perfil">
      </div>
    </div>
  </div>
</div>