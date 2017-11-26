<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoRefresco extends Model
{
    protected $table = 'tipo_refresco';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = ['nombre', 'imagen'];
}
