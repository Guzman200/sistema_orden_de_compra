<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    use HasFactory;

    protected $table = "pagos";

    protected $fillable = [
        'fecha',
        'cantidad',
        'status',
        'ordenes_de_compra_id',
        'tipos_de_pago_id'
    ];
}
