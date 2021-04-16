<?php

namespace App\Http\Controllers;

use App\Models\OrdenCompra;
use Illuminate\Http\Request;

class OrdenCompraController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {

            $ordenes = OrdenCompra::select([
                'id', 'proyecto', 'centro_costo', 'cotizacion', 'num_pagos', 'num_facturas', 'total'
            ]);

            return datatables()->eloquent($ordenes)
                ->addColumn('barra_pago', function (OrdenCompra $orden) {

                    $num_pagados = $orden->getNumeroPagosPagados();

                    $porcentaje = ($num_pagados * 100) / $orden->num_pagos;
                    
 
                    return "<div class='progress' style='height: 20px;'>
                                <div class='progress-bar' role='progressbar' style='width: $porcentaje%;' aria-valuemin='0' aria-valuemax='100'>$num_pagados</div>
                            </div>
                            "; 
                    
                    
                })
                ->rawColumns(['barra_pago'])
                ->toJson();
        }

        return view('ordenes_de_compra');
    }
}
