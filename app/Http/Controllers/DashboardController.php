<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Helpers\helper;
use Illuminate\Support\Facades\Auth;
use App\Models\Records;
use App\Models\Categorias;
use App\Models\Calculo;



class DashboardController extends Controller
{
    public function index()
    {
        $registros = Records::select('records.*','categorias.categoria')
        ->leftJoin('categorias','records.concepto','=','categorias.id')
        ->get();
        return view('dashboard',compact('registros'));
    }

    public function create(Request $request)
    {
        $categorias = Categorias::all();
        return view('create', compact("categorias"));
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
                'categoria.required'   => ' El campo categoria es obligatorio',

                'descripcion.required' => ' El campo descripcion es obligatorio',
                'descripcion.max'      => ' El campo descripcion no debe tener más de 100 caracteres',
                'descripcion.min'      => ' El campo descripcion debe tener al menos 2 caracteres',

                'monto.required'       => ' El campo monto es obligatorio',
                'monto.numeric'        => ' El campo monto no debe ser numerico',
            ]);

            $categoria    = $request->get('categoria');    
            $descripcion  = $request->get('descripcion');
            $monto        = $request->get('monto');
            $tipoCreacion = $request->get('tipo-creacion');

            $save_tran = Records::create([

                'tipo'        => $tipoCreacion,
                'concepto'    => $categoria,
                'descripcion' => $descripcion,
                'monto'       => $monto,
                'created_at'  => date("Y-m-d"),
            ]);

            return redirect()->route('dashboard.index')->with('message', 'Transaccion creada correctamente');
    
    }

    public function edit($id)
    {
        $datos = Records::where('id',$id)->get();

        if(count($datos) > 0 )
        {
            $categorias = Categorias::all();
            return view('edit', compact("categorias","datos"));
        }
        else
        {
            return redirect()->route('dashboard.index')->with('message', 'El registro consultado no existe.');
        }
    }

    public function procesarupdate(Request $request)
    {

        
       
        $datos = $request->validate(
            [
                'descripcion'       => 'required|string|max:100|min:2',
                'monto'             => 'required|numeric',
                'iddato'            => 'required|numeric',
            ],
            [
                'descripcion.required' => ' El campo descripcion es obligatorio',
                'descripcion.max'      => ' El campo descripcion no debe tener más de 100 caracteres',
                'descripcion.min'      => ' El campo descripcion debe tener al menos 2 caracteres',

                'monto.required'       => ' El campo monto es obligatorio',
                'monto.numeric'        => ' El campo monto debe ser numerico entero',

                'iddato.numeric'       => ' Se elimino el id',
            ]);

            $descripcion  = $request->get('descripcion');
            $monto        = $request->get('monto');
            $iddato       = $request->get('iddato');

            Records::where('id',$iddato)->update(['descripcion'=>$descripcion, 'monto' => $monto]);

            return redirect()->route('dashboard.index')->with('message', 'Transaccion editada correctamente');
    
    }

    public function delete($id)
    {
        $datos=Records::where('id',$id)->delete();
        return redirect()->route('dashboard.index')->with('message', 'Transaccion eliminada correctamente');
    }

    public function calculo()
    {
        
        
        $calcingresos = Records::select(DB::RAW('SUM(monto) as totingresos'))
        ->where('tipo',1)
        ->get();

        foreach ($calcingresos as $ingreso ) {
            $totingresos = $ingreso->totingresos;
        }


        $calcegresos = Records::select(DB::RAW('SUM(monto) as totegresos'))
        ->where('tipo',2)
        ->get();

        foreach ($calcegresos as $egreso ) {
            $totegresos = $egreso->totegresos;
        }

        /*      
        $registros = Calculo::all();
        $calculo = [];
        foreach ($registros as $registro)
        {
           $calculo[] = ['name' => $registro['categoria'],'y' => $registro['valor']]; 
        } */
       
        return view('calculo',compact('totingresos','totegresos'));
    }
}
