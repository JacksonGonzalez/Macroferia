<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Image extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'idProducto', 'imagen', 'created_at', 'updated_at', 'deleted_at'
    ];

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
