<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App;

class PagosController extends Controller
{
    //
    public function pagos_add(Request $request,$id){
        // CREO LAS FECHAS
        $hoy = Carbon::now();
        $mes = Carbon::now()->addMonth();
        $semana2 = Carbon::now()->addWeeks(2);
        $semana = Carbon::now()->addWeek();

        // PREPARO PARA GUARDAR EN LA BDD
        $newPago = new App\Models\Pago;
        // DEPENDE de la eleccion del tipo de subscripcion
        if($request->tiempo === '1'){
            // return '1 Mes';
            $newPago->f_vencimiento_pag =  $mes;
        }
        elseif($request->tiempo === '2'){
            // return '2 Semanas';
            $newPago->f_vencimiento_pag = $semana2;
        }
        elseif($request->tiempo === '3'){
            // return '1 Semana';
            $newPago->f_vencimiento_pag = $semana;
        }
        // Alamaceno los datos
        $newPago->detalle_pag = $request->detalle_pag;
        $newPago->fk_ci_cli_pag = $id;
        // Cambio el estado de diario a mensual
        $cliente = App\Models\Cliente::findOrFail($id);
        $cliente->tipo_cli = 'Mensual';
        // GUARDO EN LA BASE DE DATOS
        $cliente->save();
        $newPago->save();
        // return $newPago;
        return back()->with([
                    'new_pago'=>TRUE,
        ]);
    }
}