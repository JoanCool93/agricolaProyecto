<?php

namespace AgricolaGrain;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Usuario extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'usuarios';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre', 'apellidoPaterno', 'apellidoMaterno', 'correoElectronico', 'telefono', 'celular', 'password', 'tipoUsuario'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'tipoUsuario', 'remember_token'];

    public function setPasswordAttribute($valor){
        if (!empty($valor)){
            $this->attributes['password'] = \Hash::make($valor);
        }

    }

    public function direccion()
    {
        return $this->hasMany('App\Direccion');
    }

    public function rentas()
    {
        return $this->hasMany('App\Renta');
    }

    public function ventas()
    {
        return $this->hasMany('App\Venta');
    }

    public function compras()
    {
        return $this->hasMany('App\Compra');
    }
}