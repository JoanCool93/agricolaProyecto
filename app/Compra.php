<?php

namespace AgricolaGrain;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
       /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'compras';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['idEmpleado', 'fecha', 'total'];

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

    public function lineacompras()
    {
        return $this->hasMany('App\Lineacompra');
    }
}
