<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientesController extends Controller
{
    //
    public function clientes_index(Request $request){
        $usuario = $request->session()->get('usuario_activo');
        if($usuario == NULL){
            return redirect(route('login'));
        }
        else{
            return view('app.clientes.index',compact('usuario'));
        }
    }
    public function clientes_perfil(Request $request){
        $usuario = $request->session()->get('usuario_activo');
        if($usuario == NULL){
            return redirect(route('login'));
        }
        else{
            return view('app.clientes.perfiles.index',compact('usuario'));
        }
    }
}
