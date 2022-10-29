<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
   
   protected $table = 'sucursales';
   public $timestamps = false;

   protected $fillable  = [
      'sigla',
      'nomsuc',
      'direccion',
      'telefono'
   ];   

   public function zonas(){

      return $this->belongsTo(Zonas::class, 'zona');
  }

  public function riesgosSuc(){

   return $this->belongsTo(TipoRiesgos::class, 'riesgosuc');
}

}
