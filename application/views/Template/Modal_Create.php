 <!-- Modal Perfiles --------------------------------------------->

 <div class="modal fade" id="AgregarPerfil" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Agregar Perfil</h5>
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
              <input type="text" id="nombre_user" class="form-control" minlength="0" maxlength="50">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Usuario
                <span class="text-danger">*</span>
              </label>
              <input type="text" id="user" class="form-control" minlength="0" maxlength="20">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Contraseña
                <span class="text-danger">*</span>
              </label>
              <input type="password" id="pass" class="form-control" minlength="0" maxlength="20">
            </div>
          </div>

          <div class="col-md-12">
            <div class="form-group">
              <label>Perfil
                <span class="text-danger">*</span>
              </label>
              <select class="form-control select" id="rol_">
                <option value=""></option>
                <?php foreach ($Rol as $r): ?>
                  <option value="<?= $r->id_rol ;?>">
                    <?= $r->rol ;?>
                  </option>
                <?php endforeach ;?>
              </select>
            </div>
          </div>
        </div>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <input type="button" class="btn btn-primary" id="Agregar_Perfil" value="Guardar Perfil">
      </div>
    </div>
  </div>
</div>

 <!-- Modal Personal --------------------------------------------->

 <div class="modal fade" id="agregarPersonal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Agregar Personal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body text-center">

        <div class="form-row">
          <div class="col-md-12">
            <div class="form-group">
              <label>Nombre
                <span class="text-danger">*</span>
              </label>
              <input type="text" id="nombre_personal" class="form-control" minlength="0" maxlength="30">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Usuario
                <span class="text-danger">*</span>
              </label>
              <input type="text" id="usuario_personal" class="form-control" minlength="0" maxlength="20">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Contraseña
                <span class="text-danger">*</span>
              </label>
              <input type="password" id="pass_personal" class="form-control" minlength="0" maxlength="20">
            </div>
          </div>

          <div class="col-md-12">
            <div class="form-group">
              <label>Perfil
                <span class="text-danger">*</span>
              </label>
              <select class="form-control select" id="rol_personal">
                <option value=""></option>
                <?php foreach ($Rol as $r): ?>
                  <option value="<?= $r->id_rol ;?>">
                    <?= $r->rol ;?>
                  </option>
                <?php endforeach ;?>
              </select>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>E-mail
                <span class="text-danger">*</span>
              </label>
              <input type="email" id="email_personal" class="form-control" minlength="0" maxlength="50">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Nacimiento
                <span class="text-danger">*</span>
              </label>
              <input type="date" id="nacimiento_personal" class="form-control" value="<?php echo date('2000-12-31') ?>" max="<?php echo date('2001-01-01') ?>">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Telefono
                <span class="text-danger">*</span>
              </label>
              <input type="text" id="telefono_personal" class="form-control validarnumeros telefono" minlength="0" maxlength="8">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Sexo
                <span class="text-danger">*</span>
              </label>
              <input type="text" id="sexo_personal" class="form-control" minlength="0" maxlength="15">
            </div>
          </div>
        </div>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <input type="button" class="btn btn-primary" id="agregar_Personal" value="Guardar Personal">
      </div>
    </div>
  </div>
</div>
<!-- Modal Libros ------------------------------------------------------------>

<div class="modal fade" id="agregar_Libro" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Agregar Libro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body text-center">

        <div class="form-row">

          <div class="col-md-6">
            <div class="form-group">
              <label>Titulo
                <span class="text-danger">*</span>
              </label>
              <input type="text" id="tituloLibro" class="form-control" minlength="0" maxlength="50">
            </div>
          </div>

          <?php 
          if(isset($libro->identificador) !== mt_rand(1, 1000)){
            $prueba = mt_rand(1, 1000);
            
          }; ?>

          <div class="col-md-6">
            <div class="form-group">
              <label>Identificador
                <span class="text-danger">*</span>
              </label>
              <input type="text" id="identificadorLibro" class="form-control validarnumeros" value="<?= $prueba; ?>" minlength="0" maxlength="11">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Categoria
                <span class="text-danger">*</span>
              </label>
              <select id="categoriaLibro" class="form-control select">
                <option value="">---</option>
                <?php foreach ($categoria as $c): ?>
                  <option value="<?php echo $c->id_categoria ?>">
                    <?php echo $c->categoria ?>
                  </option>
                <?php endforeach ?>
              </select>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>autor
                <span class="text-danger">*</span>
              </label>
              <select id="autorLibro" class="form-control select">
                <option value="">---</option>
                <?php foreach ($autor as $a): ?>
                  <option value="<?php echo $a->id_autor ?>">
                    <?php echo $a->nombre ?>
                  </option>
                <?php endforeach ?>
              </select>
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label>Lanzamiento
                <span class="text-danger">*</span>
              </label>
              <input type="date" id="fLanzamientoLibro" class="form-control" minlength="0" maxlength="50">
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label>editorial
                <span class="text-danger">*</span>
              </label>
              <select id="editorialLibro" class="form-control select">
                <option value="">---</option>
                <?php foreach ($editorial as $e): ?>
                  <option value="<?php echo $e->id_editorial ?>">
                    <?php echo $e->Editorial_e ?>
                  </option>
                <?php endforeach ?>
              </select>
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label>Stock
                <span class="text-danger">*</span>
              </label>
              <input type="text" id="stockLibro" class="form-control" minlength="0" maxlength="50">
            </div>
          </div>

          <div class="col-md-12">
            <div class="form-group">
              <label>Fotografía Libro
                <span class="text-danger">*</span>
              </label>

              <button class="btn btn-light btn-sm" id="upFile">
                <i class="fa fa-upload" id="ico-btn-file" aria-hidden="true"></i>
              </button>
              
              <input type="file" id="imagenLibro" style="display:none" enctype='multipart/form-data'>
              <img id='img-upload' style=" border: 1px solid #ddd;border-radius: 4px;padding: 5px;width: 150px;" />
            </div>
          </div>

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <input type="button" class="btn btn-primary" id="agregarLibros" value="Guardar Perfil">
        </div>

      </div>
    </div>
  </div>
</div>

<!-- Modal Cliente --------------------------------------------->

<div class="modal fade" id="AgregarCliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Agregar Cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body text-center">

        <div class="form-row">

          <div class="col-md-12">
            <div class="form-group">
              <label>DUI
                <span class="text-danger">*</span>
              </label>
              <input type="number" id="dui" class="form-control dui" minlength="0" maxlength="10" placeholder="Ingresar su Dui con Guion">
            </div>
          </div>

          <div class="col-md-12">
            <div class="form-group">
              <label>Nombre Completo
                <span class="text-danger">*</span>
              </label>
              <input type="text" id="nombreCliente" class="form-control" minlength="0" maxlength="50">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Usuario
                <span class="text-danger">*</span>
              </label>
              <input type="text" id="usuarioCliente" class="form-control" minlength="0" maxlength="20">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Contraseña
                <span class="text-danger">*</span>
              </label>
              <input type="password" id="passCliente" class="form-control" minlength="0" maxlength="20">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>E-mail
                <span class="text-danger">*</span>
              </label>
              <input type="email" id="emailCliente" class="form-control" minlength="0" maxlength="50">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Nacimiento
                <span class="text-danger">*</span>
              </label>
              <input type="date" id="nacimientoCliente" class="form-control" value="<?php echo date('2000-12-31') ?>" max="<?php echo date('2001-01-01') ?>">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Telefono
                <span class="text-danger">*</span>
              </label>
              <input type="text" id="telefonoCliente" class="form-control validarnumeros telefono" minlength="0" maxlength="8">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Sexo
                <span class="text-danger">*</span>
              </label>
              <input type="text" id="sexoCliente" class="form-control" minlength="0" maxlength="15">
            </div>
          </div>

          <div class="col-md-12">
            <div class="form-group">
              <label>Direccion
                <span class="text-danger">*</span>
              </label>
              <input type="text" id="direccionCliente" class="form-control" minlength="0" maxlength="100">
            </div>
          </div>
          
        </div>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <input type="button" class="btn btn-primary" id="agregar_cliente" value="Guardar">
      </div>
    </div>
  </div>
</div>

<!-- Modal Categorias --------------------------------------------->

<div class="modal fade" id="agregarCategoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Agregar Categoria</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body text-center">

        <div class="form-row">
          <div class="col-md-12">
            <div class="form-group">
              <label>Categoria
                <span class="text-danger">*</span>
              </label>
              <input type="text" id="nombreCategoria" class="form-control" minlength="0" maxlength="20">
            </div>
          </div>
        </div>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <input type="button" class="btn btn-primary" id="agregar_Categoria" value="Guardar">
      </div>
    </div>
  </div>
</div>

<!-- Modal Autor --------------------------------------------->

<div class="modal fade" id="agregarAutor" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Agregar Autores</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body text-center">

        <!-- <?php// echo form_open_multipart('pks/proses_edit_pks'); ?> -->
        <!-- <?// php  echo  $ error ; ?>
        <? //php  echo  form_open_multipart ( 'upload / do_upload' ); ?> -->

        <div class="form-row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Nombre Completo
                <span class="text-danger">*</span>
              </label>
              <input type="text" id="nombreAutor" class="form-control" minlength="0" maxlength="50">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Nacimiento
                <span class="text-danger">*</span>
              </label>
              <input type="date" id="nacimientoAutor" class="form-control" min="" max="<?php echo date('Y-m-d') ?>">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Nacionalidad
                <span class="text-danger">*</span>
              </label>
              <select class="form-control select" id="nacionalidadAutor">
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
              <input type="text" id="sexoAutor" class="form-control" minlength="0" maxlength="20">
            </div>
          </div>

          <!-- <div class="col-md-6">
            <div class="form-group">
              <label>Foto
                <span class="text-danger">*</span>
              </label>
              <input type="file" id="fotoAutor" name="fotoAutor">
            </div>
          </div> -->
        </div>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <input type="button" class="btn btn-primary" id="agregar_Autor" value="Guardar Perfil">
      </div>
    </div>
  </div>
</div>

<!-- Modal Editorial --------------------------------------------->

<div class="modal fade" id="agregarEditorial" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Agregar Editorial</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body text-center">

        <div class="form-row">
          <div class="col-md-12">
            <div class="form-group">
              <label>Nombre de Editorial
                <span class="text-danger">*</span>
              </label>
              <input type="text" id="editorialEdit" class="form-control" minlength="0" maxlength="50">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Pais
                <span class="text-danger">*</span>
              </label>
              <input type="text" id="paisEdit" class="form-control" minlength="0" maxlength="30">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Telefono
                <span class="text-danger">*</span>
              </label>
              <input type="text" id="telefonoEdit" class="form-control validarnumeros" minlength="0" maxlength="8">
            </div>
          </div>

          <div class="col-md-12">
            <div class="form-group">
              <label>Direccion
                <span class="text-danger">*</span>
              </label>
              <input type="text" id="direccionEdit" class="form-control" minlength="0" maxlength="200">
            </div>
          </div>

        </div>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <input type="button" class="btn btn-primary" id="agregar_Editorial" value="Guardar Perfil">
      </div>
    </div>
  </div>
</div>