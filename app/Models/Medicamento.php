<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'nombre',
        'presentacion',
        'unidad_medida',
        'cantidad_disponible',
        'estatus',
    ];

    public function lotes()
    {
        return $this->hasMany(Lote::class);
    }
}
