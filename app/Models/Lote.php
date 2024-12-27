<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lote extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'medicamento_id',
        'cantidad',
        'fecha_vencimiento',
        'fecha_registro',
        'origen',
        'estatus',
    ];

    public function medicamento()
    {
        return $this->belongsTo(Medicamento::class);
    }
}
