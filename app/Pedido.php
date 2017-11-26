<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = 'pedido';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = ['cliente_id'];

    public function cliente()
    {
        return $this->belongsTo('App\Cliente');
    }
    
    public function refrescos()
    {
        return $this->belongsToMany('App\Refresco');
    }

    public function platos()
    {
        return $this->belongsToMany('App\Plato');
    }

    public function ticket()
    {
        return $this->hasOne('App\Ticket');
    }
}
