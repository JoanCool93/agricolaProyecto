<?php

namespace AgricolaGrain;

use Illuminate\Database\Eloquent\Model;

class Especie extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'especies';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['descripcion'];
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function bodegas()
    {
        return $this->belongsToMany('AgricolaGrain\Bodega');
    }

    public function granos()
    {
        return $this->hasMany('AgricolaGrain\Grano');
    }
}
