<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    
    public function index(Request $request)
    {
        if($request->ajax()){

        }

        return view('producto.index');
    }
}