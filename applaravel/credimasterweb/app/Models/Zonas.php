<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zonas extends Model
{
    protected $table = 'zonas';

    public function sucursales(){
        return $this->hasMany(Sucursales::class, 'id');
    }

}
