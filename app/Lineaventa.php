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
    protected $fillable = ['id', 'idVenta', 'idGrano', 'cantidad'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
    public function venta()
    {
        return $this->belongsTo('App\Venta');
    }

    public function grano()
    {
        return $this->hasOne('App\Grano');
    }
}
