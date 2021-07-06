<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\EventController;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_evento',
        'imagen',
        'titulo',
        'lugar_evento',
        'fecha_hora',
        'categoria',
        'descripcion',
        'tipo_pago',
        'restriccion_evento',
        'precio_adultos',
        'precio_ninios'
    ];
}
