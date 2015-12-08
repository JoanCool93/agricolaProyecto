<!-- Disparo del modal por medio de un botón -->
<button type="button" class="btn btn-primary fa fa-plus" data-toggle="modal" data-target="#modalLogin">Agregar producto</button>
<!-- Modal -->
<div class="modal fade" id="modalLogin" role="dialog">
    <div class="modal-dialog">

        <!-- Contenido del Modal-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Agregar producto comprado</h4>
            </div>
            <div class="modal-body">
                {!! Form::open(['route' => 'home', 'method' => 'POST']) !!}
                    <div class="form-group">
                        {!! Form::label('grano', 'Ingrese grano comprado: ') !!}
                        {!! Form::select('grano', $granos, 0 , ['class'=> 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label ('Cantidad comprada:') !!}
                        {!! Form::input('text', 'cantidad', null, ['class'=> 'form-control', 'placeholder' => 'Ingrese la cantidad de grano comprada']) !!}
                    </div>
                {!! Form::close() !!}   
            </div>
            <div class="modal-footer">
                <div class="btn btn-default" data-dismiss="modal">Cerrar</div>
            </div>
        </div>
    </div>
</div>