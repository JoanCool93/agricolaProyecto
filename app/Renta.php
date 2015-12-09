<?php

namespace AgricolaGrain;

use AgricolaGrain\Bodega;
use Illuminate\Database\Eloquent\Model;

class Renta extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'rentas';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['idCliente', 'idBodega','fechaInicio', 'fechaTermino',
     'duracionMeses', 'importe'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
    
    public function usuario()
    {
        return $this->belongsTo('AgricolaGrain\Usuario', 'idCliente');
    }
    
    public function bodega()
    {
        return $this->belongsTo('AgricolaGrain\Bodega', 'idBodega');
    }
}
