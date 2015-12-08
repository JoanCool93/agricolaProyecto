<!-- Disparo del modal por medio de un botón -->
<button type="button" class="btn btn-danger fa fa-trash" data-toggle="modal" data-target="#modalLogin">Eliminar</button>
<!-- Modal -->
<div class="modal fade" id="modalLogin" role="dialog">
    <div class="modal-dialog">

        <!-- Contenido del Modal-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Eliminacion de usuario</h4>
            </div>
            <div class="modal-body">
                <h2 align='center'>¿Esta seguro que desea eliminar el usuario?</h2>    
            </div>
            <div class="modal-footer">
                <div class ="btn">
                    {!! Form::open(['route' => ['usuario.destroy', $usuario->id], 'method' => 'DELETE']) !!}
                            <div>
                                {!! Form::submit('Eliminar',['class' => 'btn btn-danger fa fa-trash-o']) !!}
                            </div>
                    {!! Form::close() !!}
                </div>
                <div class="btn btn-default" data-dismiss="modal">Cerrar</div>
            </div>
        </div>
    </div>
</div>