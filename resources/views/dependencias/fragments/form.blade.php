<div class="card">
    <div class="card-header">
        <div class="card-title">Habilitar Nueva Dependencia</div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6 col-lg-12">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre de la Dependencia." required>
                </div> 
                <div class="form-group">
                    <label for="usuario">Usuario</label>
                    <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Nombre del Usuario." required>
                    <small id="usuario" class="form-text text-muted">Usuario que será usado para el inicio de sesión.</small>
                </div>
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña." required>
                </div> 
                <div class="form-group">
                    <label for="email">Correo electrónico</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Correo electrónico." required>
                </div> 

                <div class="form-check">
                    <label>Estatus</label><br/>
                    <label class="form-radio-label">
                        <input class="form-radio-input" type="radio" name="permiso" value="0">
                        <span class="form-radio-sign">Habilitado</span>
                    </label>
                    <label class="form-radio-label ml-3">
                        <input class="form-radio-input" type="radio" name="permiso" value="1" checked="true">
                        <span class="form-radio-sign">Deshabilitado</span>
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="card-action">
        <button class="btn btn-success">Submit</button>
        <a class="btn btn-danger" href="{{ route('dependencias.index') }}">Cancelar</a>
        {{--<button class="btn btn-danger">Cancel</button>--}}
    </div>
</div>