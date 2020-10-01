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
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1727376747</td>
                            <td>Aguas</td>
                            <td>Carlos</td>
                            <td>Diario</td>
                        </tr>
                        <tr>
                            <td>0527376747</td>
                            <td>Perez</td>
                            <td>Julio</td>
                            <td>Mensual</td>
                        </tr>
                        <tr>
                            <td>1827376747</td>
                            <td>Jacome</td>
                            <td>David</td>
                            <td>Diario</td>
                        </tr>
                        <tr>
                            <td>6547376747</td>
                            <td>Torres</td>
                            <td>Ana</td>
                            <td>Mensual</td>
                        </tr>
                        <tr>
                            <td>1727376747</td>
                            <td>Hoyos</td>
                            <td>Pedro</td>
                            <td>Diario</td>
                        </tr>
                        <tr>
                            <td>1727376747</td>
                            <td>Quilo</td>
                            <td>Matias</td>
                            <td>Mensual</td>
                        </tr>
                        <tr>
                            <td>1727376747</td>
                            <td>Tamayo</td>
                            <td>Carolina</td>
                            <td>Diario</td>
                        </tr>
                        <tr>
                            <td>1727376747</td>
                            <td>Gutierres</td>
                            <td>Pepe</td>
                            <td>Mensual</td>
                        </tr>
                        <tr>
                            <td>1727376747</td>
                            <td>Farias</td>
                            <td>Maria</td>
                            <td>Mensual</td>
                        </tr>
                        <tr>
                            <td>1727376747</td>
                            <td>Dubal</td>
                            <td>Laura</td>
                            <td>Mensual</td>
                        </tr>
                        <tr>
                            <td>1727376747</td>
                            <td>Lopez</td>
                            <td>Bryan</td>
                            <td>Mensual</td>
                        </tr>
                        <tr>
                            <td>1727376747</td>
                            <td>Tobar</td>
                            <td>Salome</td>
                            <td>Diario</td>
                        </tr>
                        <tr>
                            <td>1727376747</td>
                            <td>Ruiz</td>
                            <td>Tommy</td>
                            <td>Mensual</td>
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