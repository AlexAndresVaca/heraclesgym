<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenerarPDF extends Controller
{
    //
    public function generar_pdf()
    {
        $pdf = app('dompdf.wrapper');
        return $pdf->stream();
    }
}
