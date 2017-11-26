<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pollo extends Model
{
    protected $table = 'pollo';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = ['cantidad_porciones', 'fecha'];
}
