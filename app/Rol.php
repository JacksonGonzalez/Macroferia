<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rol extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'nombre', 'productos', 'autorizar', 'categorias', 'banner', 'usuarios', 'created_at', 'updated_at', 'deleted_at', 'roles', 'tipo'
    ];

    public function users()
    {
        return $this->hasMany('App\User');
    }
}
