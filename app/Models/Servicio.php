<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
 use HasFactory;
 protected $fillable = ['nombre', 'descripcion'];
 public function cita()
 {
 return $this->hasMany(Servicio::class); // Un servicio tiene muchos productos
 }
}

