<?php

namespace AgricolaGrain;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'regiones';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['descripcion', 'tipoRegion'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function grano()
    {
        return $this->belongsTo('App\Grano');
    }
}
