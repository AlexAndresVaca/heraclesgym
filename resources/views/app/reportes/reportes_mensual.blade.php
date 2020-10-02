@extends('plantilla')
@section('reportes_active')
active
@endsection
@section('main')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-2">
        <!-- DONDE SE ENCUENTRA -->
        <h1 class="h3 mb-0 text-gray-800">Reporte mensual</h1>
    </div>
    <div class="row justify-content-center">
        <form action="" class="form-inline">
            <div class="card">
                <div class="card-header">
                    <h6>Selecciona un mes</h6>
                </div>
                <div class="card-body">
                    <input type="month" class="form-control">
                    <button type="submit" class="btn btn-primary">Generar</button>
                    @if(session('error'))
                    <div class="is-invalid text-danger text-center ">
                        <strong>mayo de 2020 </strong> no esta registrada.
                    </div>
                    @endif
                </div>
        </form>
    </div>
</div>
<hr>
<div class="container-fluid">
    <div class="alert alert-secondary alert-dismissible fade show">
        <ul>
            <h3>Leyenda</h3>
            <li class="badge badge-primary">Mensual</li>
            <li class="badge badge-success">Diario</li>
            <li class="badge badge-danger">Pago expirado</li>
        </ul>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-danger">mayo del 2020</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-gym table-dark table-bordered" id="example" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#CI</th>
                            <th>Apellido</th>
                            <th>Nombre</th>
                            <th>Tipo</th>
                            <th class="w-150px">Anotaciones</th>
                        </tr>
                    </thead>
                    <tbody class="color-white">
                        <tr class="bg-primary">
                            <td>1727676676</td>
                            <td>Vaca</td>
                            <td>Alex</td>
                            <td>Mensual</td>
                            <td></td>
                        </tr>
                        <tr class="bg-success">
                            <td>1712957396</td>
                            <td>Gomes</td>
                            <td>Carolina</td>
                            <td>Diario</td>
                            <td></td>
                        </tr>
                        <tr class="bg-danger">
                            <td>0569124215</td>
                            <td>Casas</td>
                            <td>Luis</td>
                            <td>Mensual</td>
                            <td>Ingresó con pago caducado</td>
                        </tr>
                        <tr class="bg-primary">
                            <td>1727676676</td>
                            <td>Vaca</td>
                            <td>Alex</td>
                            <td>Mensual</td>
                            <td></td>
                        </tr>
                        <tr class="bg-success">
                            <td>1712957396</td>
                            <td>Gomes</td>
                            <td>Carolina</td>
                            <td>Diario</td>
                            <td></td>
                        </tr>
                        <tr class="bg-danger">
                            <td>0569124215</td>
                            <td>Casas</td>
                            <td>Luis</td>
                            <td>Mensual</td>
                            <td>Ingresó con pago caducado</td>
                        </tr>
                        <tr class="bg-primary">
                            <td>1727676676</td>
                            <td>Vaca</td>
                            <td>Alex</td>
                            <td>Mensual</td>
                            <td></td>
                        </tr>
                        <tr class="bg-success">
                            <td>1712957396</td>
                            <td>Gomes</td>
                            <td>Carolina</td>
                            <td>Diario</td>
                            <td></td>
                        </tr>
                        <tr class="bg-danger">
                            <td>0569124215</td>
                            <td>Casas</td>
                            <td>Luis</td>
                            <td>Mensual</td>
                            <td>Ingresó con pago caducado</td>
                        </tr>
                        <tr class="bg-primary">
                            <td>1727676676</td>
                            <td>Vaca</td>
                            <td>Alex</td>
                            <td>Mensual</td>
                            <td></td>
                        </tr>
                        <tr class="bg-success">
                            <td>1712957396</td>
                            <td>Gomes</td>
                            <td>Carolina</td>
                            <td>Diario</td>
                            <td></td>
                        </tr>
                        <tr class="bg-danger">
                            <td>0569124215</td>
                            <td>Casas</td>
                            <td>Luis</td>
                            <td>Mensual</td>
                            <td>Ingresó con pago caducado</td>
                        </tr>
                        <tr class="bg-primary">
                            <td>1727676676</td>
                            <td>Vaca</td>
                            <td>Alex</td>
                            <td>Mensual</td>
                            <td></td>
                        </tr>
                        <tr class="bg-success">
                            <td>1712957396</td>
                            <td>Gomes</td>
                            <td>Carolina</td>
                            <td>Diario</td>
                            <td></td>
                        </tr>
                        <tr class="bg-danger">
                            <td>0569124215</td>
                            <td>Casas</td>
                            <td>Luis</td>
                            <td>Mensual</td>
                            <td>Ingresó con pago caducado</td>
                        </tr>
                        <tr class="bg-primary">
                            <td>1727676676</td>
                            <td>Vaca</td>
                            <td>Alex</td>
                            <td>Mensual</td>
                            <td></td>
                        </tr>
                        <tr class="bg-success">
                            <td>1712957396</td>
                            <td>Gomes</td>
                            <td>Carolina</td>
                            <td>Diario</td>
                            <td></td>
                        </tr>
                        <tr class="bg-danger">
                            <td>0569124215</td>
                            <td>Casas</td>
                            <td>Luis</td>
                            <td>Mensual</td>
                            <td>Ingresó con pago caducado</td>
                        </tr>
                        <tr class="bg-primary">
                            <td>1727676676</td>
                            <td>Vaca</td>
                            <td>Alex</td>
                            <td>Mensual</td>
                            <td></td>
                        </tr>
                        <tr class="bg-success">
                            <td>1712957396</td>
                            <td>Gomes</td>
                            <td>Carolina</td>
                            <td>Diario</td>
                            <td></td>
                        </tr>
                        <tr class="bg-danger">
                            <td>0569124215</td>
                            <td>Casas</td>
                            <td>Luis</td>
                            <td>Mensual</td>
                            <td>Ingresó con pago caducado</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="dropdown-divider"></div>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Resumen productos</h1>
    </div>
    <div class="row">
        <div class="col-xl-4 col-md-4 mb-4">
            <div class="card border-left-info shadow h-100 py-2 bg-black">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-lg font-weight-bold text-info text-uppercase mb-1">Agua mineral</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-100">45 <span
                                    class="text-xs font-weight-lighter "> unidades vendidas.</span> </div>
                        </div>
                        <div class="col-auto">
                            <!-- <i class="fas fa-user fa-2x text-gray-300"></i> -->
                            <i class="fas fa-box-open fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-4 mb-4">
            <div class="card border-left-purple shadow h-100 py-2 bg-black">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-lg font-weight-bold text-purple text-uppercase mb-1">Powerade</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-100">45 <span
                                    class="text-xs font-weight-lighter "> unidades vendidas.</span> </div>
                        </div>
                        <div class="col-auto">
                            <!-- <i class="fas fa-user fa-2x text-gray-300"></i> -->
                            <i class="fas fa-box-open fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-4 mb-4">
            <div class="card border-left-success shadow h-100 py-2 bg-black">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-lg font-weight-bold text-success text-uppercase mb-1">Gatorade</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-100">45 <span
                                    class="text-xs font-weight-lighter "> unidades vendidas.</span> </div>
                        </div>
                        <div class="col-auto">
                            <!-- <i class="fas fa-user fa-2x text-gray-300"></i> -->
                            <i class="fas fa-box-open fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection