<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriaRefresco extends Model
{
    protected $table = 'categoria_refresco';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = ['nombre', 'contenido'];

    public function refrescos()
    {
        return $this->hasMany('App\Refresco');
    }
}
