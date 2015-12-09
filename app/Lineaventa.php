<?php

namespace AgricolaGrain;

use Illuminate\Database\Eloquent\Model;

class Lineaventa extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'lineaventas';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['idVenta', 'idGrano', 'cantidad', 'subTotal'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function venta()
    {
        return $this->belongsTo('AgricolaGrain\Venta', 'idVenta');
    }

    public function grano()
    {
        return $this->belongsTo('AgricolaGrain\Grano', 'idGrano');
    }
}
