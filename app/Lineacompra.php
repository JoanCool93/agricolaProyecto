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
    protected $fillable = ['idCompra', 'idGrano', 'cantidad', 'subTotal'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function compra()
    {
        return $this->belongsTo('AgricolaGrain\Compra', 'idCompra');
    }

    public function grano()
    {
        return $this->belongsTo('AgricolaGrain\Grano', 'idGrano');
    }
}
