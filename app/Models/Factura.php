<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;

    protected $table = "facturas";

    protected $fillable = [
        'direccion_factura',
        'ordenes_de_compra_id',
        'nombre_factura'
    ];
}
