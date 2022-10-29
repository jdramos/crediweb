<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comercio extends Model
{
    protected $table = 'tipo_negocios';

    public function riesgos()
    {
       return $this->belongsTo(TipoRiesgos::class,'idRiesgo', 'id');
    }
}
