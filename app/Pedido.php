<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = 'pedido';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = ['cliente_id'];
}
