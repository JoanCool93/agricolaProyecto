<?php

namespace AgricolaGrain;

use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
	 /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'direcciones';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['idCliente', 'idDireccion', 'calle', 'numero', 
    'colonia', 'ciudad', 'estado', 'pais'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];


    public function usuario()
    {
        return $this->belongsTo('App\Usuario');
    }
}
