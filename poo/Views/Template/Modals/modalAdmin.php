<!-- Modal https://stackoverflow.com/questions/50639400/bootstrap-popup-modal-appears-to-small-and-in-wrong-position   -->
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
</head>
  <!-- The Modal -->
  <div class="modal fade" id="modalFormRol" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
      
       <!-- Modal Header -->
       <div class="modal-header">
          <h4 class="modal-title">Ingresar Administrador</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">


        <div class="tile">
            <h3 class="tile-title">Formulario:</h3>
            <div class="tile-body">
              <form id='formRol' name='formRol'>
                <div class="form-group">
                  <label class="control-label">Documento</label>
                  <input id="modalFormRol_AdministradorDocumento" class="form-control" type="text" placeholder="Ingrese solo el numero de documento" name="modalFormRol_AdministradorDocumento">
                </div>
                <div class="form-group">
                  <label class="control-label">Nombre</label>
                  <input id="modalFormRol_AdministradorNombre" class="form-control" type="text" placeholder="Ingrese solo el nombre" name="modalFormRol_AdministradorNombre">
                </div>
                <div class="form-group">
                  <label class="control-label">Apellido</label>
                  <input id="modalFormRol_AdministradorApellido" class="form-control" type="text" placeholder="Ingrese solo el primer apellido" name="modalFormRol_AdministradorApellido">
                </div>
                <div class="form-group">
                  <label class="control-label">Fecha de Nacimiento</label>
                  <input id="modalFormRol_AdministradorFecha" class="form-control" type="date" placeholder="AAAA-MM-DD" name="modalFormRol_AdministradorFecha">
                </div>
                <div class="form-group">
                  <label class="control-label">Email</label>
                  <input id="modalFormRol_AdministradorEmail" class="form-control" type="email" placeholder="Direccion de email" name="modalFormRol_AdministradorEmail">
                </div>
                <div class="form-group">
                  <label class="control-label">Celular</label>
                  <input id="modalFormRol_AdministradorCelular" class="form-control" type="text" placeholder="Contacto telefonico" name="modalFormRol_AdministradorCelular">
                </div>
                <div class="form-group">
                  <label class="control-label">Foto</label>
                  <input id="modalFormRol_AdministradorFoto" class="form-control" type="file" name="modalFormRol_AdministradorFoto">
                </div>
                <div class="tile-footer">
                  <button class="btn btn-primary" type="submit" value="register">Registrar<i class="fa fa-fw fa-lg fa-check-circle"></i>&nbsp;&nbsp;&nbsp;</button>
                </div>
              </form>
            </div>
            
          </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        </div>
      </div>
    </div>
  </div>



















