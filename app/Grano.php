<?php

namespace AgricolaGrain;

use Illuminate\Database\Eloquent\Model;

class Grano extends Model
{
     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'granos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['especie', 'variedad', 'descripcion', 'costo', 'tamañoPlanta', 
    'tamañoFruto', 'region', 'forma', 'periodoMaduracion', 'resistencias', 'clima'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function especie()
    {
        return $this->belongsTo('AgricolaGrain\Especie', 'especie');
    }

    public function region()
    {
        return $this->belongsTo('AgricolaGrain\Region', 'region');
    }
    public function lineacompras()
    {
        return $this->hasMany('AgricolaGrain\Region');
    }
}
