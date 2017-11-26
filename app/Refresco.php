<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Refresco extends Model
{
    protected $table = 'refresco';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'categoria_refresco_id',
        'tipo_refresco_id',
        'precio',
        'cantidad_unidades'
    ];

    public function categoria_refresco()
    {
        return $this->belongsTo('App\CategoriaRefresco');
    }

    public function tipo_refresco()
    {
        return $this->belongsTo('App\TipoRefresco');
    }

    public function pedidos()
    {
        return $this->belongsToMany('App\Pedido');
    }
}
