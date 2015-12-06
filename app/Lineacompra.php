<?php

namespace AgricolaGrain;

use Illuminate\Database\Eloquent\Model;

class Lineacompra extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'lineacompras';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre', 'apellidoPaterno', 'apellidoMaterno', 'correoElectronico', 'telefono', 'celular', 'contraseña', 'tipoUsuario'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['contraseña', 'tipoUsuario', 'remember_token'];
}
