<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'cliente';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = ['codigo', 'cliente'];

    public function pedidos()
    {
        return $this->hasMany('App\Pedido');
    }
}
