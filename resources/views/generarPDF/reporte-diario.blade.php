@extends('plantillaPDF')
@section('main')
<div class="text-center">
    <h3 style="font-size: 1.5em;">LISTA DE INGRESOS DIARIOS</h3>
    <p><strong>Fecha: </strong><span>{{$fecha->isoFormat('dddd D \d\e MMMM \d\e\l Y')}}</span></p>
</div>
<table class="tabla-main">
    <thead>
        <tr>
            <th>#CI</th>
            <th>Apellido</th>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Anotaciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($listaIngresos as $item)
        <tr @if($item->anotacion_ing != NULL) style="color:red;" @endif >
            <td>{{$item->ci_cli}}</td>
            <td>{{$item->apellido_cli}}</td>
            <td>{{$item->nombre_cli}}</td>
            <td>{{$item->tipo_cli}}</td>
            <td>{{$item->anotacion_ing}}</td>
        </tr>
        @endforeach
        @if(count($listaIngresos) == 0)
        <tr>
            <td colspan="5"><h3>SIN INGRESOS REGISTRADOS</h3></td>
        </tr>
        @endif
    </tbody>
    <tfoot>
        <tr>
            <td class="table-footer-header text-center" colspan="5">Resumen</td>
        </tr>
        <tr>
            <td colspan="3" rowspan="4"></td>
            <td>N° Diarios</td>
            <td class="text-center">{{$numDiarios}}</td>
        </tr>
        <tr>
            <td>N° Mensuales</td>
            <td class="text-center">{{$numMensuales}}</td>
        </tr>
        <tr class="text-red">
            <td>N° Pago expirados</td>
            <td class="text-center">{{$numExpirados}}</td>
        </tr>
        <tr class="table-footer-header text-center">
            <td>Total</td>
            <td>{{$total}}</td>
        </tr>
    </tfoot>
</table>

@endsection