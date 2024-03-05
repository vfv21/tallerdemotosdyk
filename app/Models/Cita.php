<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;

    protected $fillable = ['fecha', 'datos_moto', 'id_servicio'];
 public function servicio()
 {
 return $this->belongsTo(Servicio::class); // Una cita  pertenece a un servicio
 }
}

