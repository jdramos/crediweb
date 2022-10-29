<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoRiesgos extends Model
{
  protected $table = 'tipo_riesgos';
  public $timestamps = false;

  public function riesgosSucursales()
  {
    return $this->hasMany(Sucursales::class, 'id');
  }

  public function riesgosZonas()
  {
    return $this->hasMany(Sucursales::class, 'id');
  }

}
