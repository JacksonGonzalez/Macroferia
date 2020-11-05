<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'nombre', 'idFabricante', 'idFabricante', 'idCategoria', 'precioMin', 'precioMax', 'pedidoMin', 'pedidoMax', 'color', 'talla',
        'destacado', 'estado', 'descripcion', 'created_at', 'updated_at', 'deleted_at'
    ];


    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function images()
    {
        return $this->hasMany('App\Image');
    }
}
