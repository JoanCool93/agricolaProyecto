<?php

namespace AgricolaGrain;

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
    protected $fillable = ['idCliente', 'fechaInicio', 'duracion', 'costoTotal'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
