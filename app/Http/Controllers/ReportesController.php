<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportesController extends Controller
{
    //
    public function reportes_diario(Request $request){
        $usuario = $request->session()->get('usuario_activo');
        if($usuario == NULL){
            return redirect(route('login'));
        }
        else{
            return view('app.reportes.reportes_diario',compact('usuario'));
        }
    }
    public function reportes_mensual(Request $request){
        $usuario = $request->session()->get('usuario_activo');
        if($usuario == NULL){
            return redirect(route('login'));
        }
        else{
            return view('app.reportes.reportes_mensual',compact('usuario'));
        }
    }
}
