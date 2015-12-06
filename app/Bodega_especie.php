<?php

namespace AgricolaGrain;

use Illuminate\Database\Eloquent\Model;

class Bodega_especie extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'bodega_especie';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['idBodega', 'idEspecie'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
