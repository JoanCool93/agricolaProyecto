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
    protected $fillable = ['especie', 'variedad', 'descripcion', 'tamañoPlanta', 
    'tamañoFruto', 'region', 'forma', 'periodoMaduracion', 'resistencias', 
    'clima'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function especie()
    {
        return $this->hasOne('App\Especie');
    }

    public function region()
    {
        return $this->hasOne('App\Region');
    }
}
