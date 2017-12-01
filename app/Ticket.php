<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $table = 'ticket';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = ['numero_pedido', 'total'];
    
    public function pedido()
    {
        return $this->belongsTo('App\Pedido');
    }
}
