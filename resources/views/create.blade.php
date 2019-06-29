<div class="col-12 py-2">
        <h4 class="modal-title">
            Registrar datos
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </h4>
    </div>
    
    
    <div class="card card-gris border-top-primary py-2">
        <div class="card-body">
            <form action="{{ url('/crear_socio') }}"  method="post" id="f_crear_socio" class="formentrada">
                @csrf
    
                <div class="form-group row">
                    <label class="col-form-label col-md-2" for="nombres">Nombres</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Ingrese nombres" required>
                    </div>
                </div><!-- /.form-group -->
    
                <div class="form-group row">
                    <label class="col-form-label col-md-2" for="apellidos">Apellidos</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Ingrese apellidos" required>
                    </div>
                </div><!-- /.form-group -->

                <div class="form-group row">
                        <label class="col-form-label col-md-2" for="apellidos">Apellidos</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Ingrese apellidos" required>
                        </div>
                    </div><!-- /.form-group -->

                <div class="form-group row">
                    <label class="col-form-label col-md-2" for="celular">Celular</label>
                    <div class="col-md-10">
                        <input type="tel" class="form-control" id="celular" name="celular" placeholder="Ingrese celular" required>
                    </div>
                </div><!-- /.form-group -->

                <div class="form-group row">
                    <label class="col-form-label col-md-2" for="correo">Correo</label>
                    <div class="col-md-10">
                        <input type="email" class="form-control" id="correo" name="correo" placeholder="Ingrese correo" required>
                    </div>
                </div><!-- /.form-group -->

                <div class="form-group row">
                        <input type="hidden" id="curso" name="curso">
                    </div><!-- /.form-group -->
    
                <div class="form-group row">
                    <div class="offset-md-2">
                        <button type="submit" class="btn btn-primary form-control"><i class="fas fa-send"></i> Enviar</button>
                    </div>
                </div>
    
            </form>
        </div>
    </div>
    
    
    
    
    
    
    
    