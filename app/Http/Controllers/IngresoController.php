<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IngresoController extends Controller
{
    //
    public function index(){
        return view('public.ingreso.index');
    }
    public function ingreso(){
        return view('public.ingreso.ingreso');
    }
    public function consulta(){
        return view('public.ingreso.consulta');
    }
}
