<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Helpers\helper;
use Illuminate\Support\Facades\Auth;
use App\Models\Records;

class DashboardController extends Controller
{
    public function index()
    {
        $registros = Records::orderBy('id','asc')->get();
        return view('dashboard',compact('registros'));
    }

    public function create(Request $request)
    {
        return view('create');
    }

    public function processcreate(Request $request)
    {

        $datos = $request->validate(
            [
                'categoria'         => 'required|numeric',
                'descripcion'       => 'required|string|max:100|min:2',
                'monto'             => 'required|numeric',
            ],
            [
                'categoria.required'   => ' El campo teléfono es obligatorio',

                'descripcion.required' => ' El campo descripcion es obligatorio',
                'descripcion.max'      => ' El campo descripcion no debe tener más de 100 caracteres',
                'descripcion.min'      => ' El campo descripcion debe tener al menos 2 caracteres',

                'monto.required'       => ' El campo monto es obligatorio',
                'monto.numeric'        => ' El campo monto no debe tener más de 300 caracteres',
            ]);

            $categoria    = $request->get('categoria');    
            $descripcion  = $request->get('descripcion');
            $monto        = $request->get('monto');
            $tipoCreacion = $request->get('tipo-creacion');

            $save_tran = Records::create([

                'tipo'        => $tipoCreacion,
                'concepto'    => $categoria,
                'descripcion' => $descripcion,
                'created_at'  => date("Y-m-d"),
            ]);

            return redirect('dashboard')->with(['message' => 'Se ha creado una nueva transaccion']);
    
    }
}
