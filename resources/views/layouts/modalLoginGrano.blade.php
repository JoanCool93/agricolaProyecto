<!-- Disparo del modal por medio de un botón -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalLogin">Ingresar para comprar</button>
<!-- Modal -->
<div class="modal fade" id="modalLogin" role="dialog">
    <div class="modal-dialog">

        <!-- Contenido del Modal-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Inicio de sesión</h4>
            </div>
            <div class="modal-body">
                {!! Form::open(['route' => 'loginBodega', 'method' => 'POST', 'class' => 'form']) !!}
                    <div class="form-group">
                        <label>Correo electrónico</label>
                        {!! Form::email('correoElectronico', '', ['class'=> 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        <label>Contraseña</label>
                        {!! Form::password('password', ['class'=> 'form-control']) !!}
                    </div>
                    <div class="checkbox">
                        <label><input name="remember" type="checkbox"> Recordarme</label>
                    </div>
                    <div>                            
                        {!! Form::submit('Iniciar sesión',['class' => 'btn btn-primary']) !!}
                    </div>
                {!! Form::close() !!}
            </div>
            <div class="modal-footer">
                <div class="btn btn-default" data-dismiss="modal">Cerrar</div>
            </div>
        </div>
    </div>
</div>