<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedidasController extends Controller
{
    //
    public function clientes_medidas_nueva(Request $request){
        $usuario = $request->session()->get('usuario_activo');
        if($usuario == NULL){
            return redirect(route('login'));
        }
        else{
            $sexo = 'Hombre';
            // $sexo = 'Mujer';
            if($sexo == 'Hombre'){
                return view('app.clientes.medidas.medidasHRegistrar',compact('usuario'));
            }
            if($sexo == 'Mujer'){
                return view('app.clientes.medidas.medidasMRegistrar',compact('usuario'));
            }
        }
    }
    public function clientes_medidas(Request $request){
        $usuario = $request->session()->get('usuario_activo');
        if($usuario == NULL){
            return redirect(route('login'));
        }
        else{
            $sexo = 'Mujer';
            // $sexo = 'Mujer';
            if($sexo == 'Hombre'){
                return view('app.clientes.medidas.medidasH',compact('usuario'));
            }
            if($sexo == 'Mujer'){
                return view('app.clientes.medidas.medidasM',compact('usuario'));
            }
        }
    }
    
}
