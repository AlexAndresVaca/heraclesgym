<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PagesController extends Controller
{
    //
    public function index(){
        return redirect(route('inicio'));
        // return view('welcome');
    }
    public function login(Request $request){
        $usuario = $request->session()->get('usuario_activo');
        if($usuario == NULL){
            return view('public.login');
        }
        else{
            return redirect(route('inicio'));
        }
    }
    public function iniciarSesion(Request $request){
        $request->validate([
            'nick' => 'required|exists:App\Models\Usuario,nick_usu',
        ],[
            'nick.required' => 'Este campo es obligatorio',
            'nick.exists' => 'Este nombre de usuario no existe',
        ]);
        $usuario = NULL;
        $ingreso = NULL;
        $login = App\Models\Usuario::where('nick_usu','=',$request->nick)
                            ->where('password_usu','=',$request->pass)
                            ->first();
        // 
        if($login == ''){
            $ingreso = 'Datos erroneos';
            return back()->with([
                                    'ingreso' => $ingreso,
                                    'nick' => $request->nick
            ]);
        }
        else if($login != ''){
            if($login->nick_usu === $request->nick AND $login->password_usu === $request->pass){
                $request->session()->put(['usuario_activo'=>$login->nick_usu]);
                $usuario = $request->session()->get('usuario_activo');
                return redirect(route('inicio'));
            }
            else{
                $ingreso = 'Revisa tus datos y vuelve a intentar';
                return back()->with([
                                        'ingreso' => $ingreso,
                                        'nick' => $request->nick
                ]);
            }
        }
    }
    public function inicio( Request $request){
        $usuario = $request->session()->get('usuario_activo');
        if($usuario == NULL){
            return redirect(route('login'));
        }
        else{
            return view('app.inicio',compact('usuario'));
        }
    }
    public function productos( Request $request){
        $usuario = $request->session()->get('usuario_activo');
        if($usuario == NULL){
            return redirect(route('login'));
        }
        else{
            return view('app.productos',compact('usuario'));
        }
    }
    public function cerrarSesion(Request $request){
        $usuario = $request->session()->flush();
        // return "HOLA";
        return redirect(route('login'));
    }
}
