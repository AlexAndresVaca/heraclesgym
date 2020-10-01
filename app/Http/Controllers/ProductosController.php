<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductosController extends Controller
{
    //
    public function productos_index(Request $request){
        $usuario = $request->session()->get('usuario_activo');
        if($usuario == NULL){
            return redirect(route('login'));
        }
        else{
            return view('app.productos.index',compact('usuario'));
        }
    }
    public function productos_detalles(Request $request){
        $usuario = $request->session()->get('usuario_activo');
        if($usuario == NULL){
            return redirect(route('login'));
        }
        else{
            return view('app.productos.detalles',compact('usuario'));
        }
    }
}
