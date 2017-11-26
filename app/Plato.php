<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plato extends Model
{
    protected $table = 'plato';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'porcion',
        'precio',
        'descripcion',
        'imagen'
    ];

    public function pedidos()
    {
        return $this->belongsToMany('App\Pedido');
    }
}
