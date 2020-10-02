@extends('plantilla')
@section('home_active')
active
@endsection
@section('main')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <!-- Cambiar Menu por nombre de la pagina donde se encuentre -->
        <h1 class="h3 mb-0 text-gray-800">Resumen diario</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example | Tarjeta de clientes mensuales -->
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2 bg-black">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-lg font-weight-bold text-danger text-uppercase mb-1">Clientes mensuales
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-100">89 <span
                                    class="text-xs font-weight-lighter ">/ personas.</span> </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example  | Tarjeta de clientes diarios-->
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-success bg-black shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-lg font-weight-bold text-success text-uppercase mb-1">Clientes diarios
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-200 ">3 <span
                                    class="text-xs font-weight-lighter ">/ personas.</span></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example  | Tarjeta de aforo -->
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-info bg-black shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-lg font-weight-bold text-info text-uppercase mb-1">Aforo</div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-100">3/15<span
                                            class="text-xs">Máx.</span></div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 20%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example  | Tarjeta de clientes con pago expirado -->
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-warning bg-black shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-lg font-weight-bold text-warning text-uppercase mb-1">Clientes pago
                                expirado</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-100">18</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="container">
        <div class="row justify-content-center">
            <a href="">
                <button type="button" class="btn btn-danger">Ver detalles</button>
            </a>
        </div>
    </div>

    <!-- Content Row -->


</div>
<div class="dropdown-divider"></div>
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <!-- Cambiar Menu por nombre de la pagina donde se encuentre -->
        <h1 class="h3 mb-0 text-gray-800">Resumen mensual</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example | Tarjeta de clientes mensuales -->
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2 bg-black">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-lg font-weight-bold text-danger text-uppercase mb-1">Clientes mensuales
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-100">89 <span
                                    class="text-xs font-weight-lighter ">/ personas.</span> </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example  | Tarjeta de clientes diarios-->
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-success bg-black shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-lg font-weight-bold text-success text-uppercase mb-1">Clientes diarios
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-200 ">3 <span
                                    class="text-xs font-weight-lighter ">/ personas.</span></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example  | Tarjeta de aforo -->
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-info bg-black shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-lg font-weight-bold text-info text-uppercase mb-1">Aforo</div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-100">3/15<span
                                            class="text-xs">Máx.</span></div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 20%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example  | Tarjeta de clientes con pago expirado -->
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-warning bg-black shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-lg font-weight-bold text-warning text-uppercase mb-1">Clientes pago
                                expirado</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-100">18</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="container">
        <div class="row justify-content-center">
            <a href="">
                <button type="button" class="btn btn-danger">Ver detalles</button>
            </a>
        </div>
    </div>

    <!-- Content Row -->

</div>
<div class="dropdown-divider"></div>
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <!-- Cambiar Menu por nombre de la pagina donde se encuentre -->
        <h1 class="h3 mb-0 text-gray-800">Resumen de productos en stock</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example | Tarjeta de clientes mensuales -->
        <div class="col-xl-4 col-md-12 mb-4">
            <div class="card border-left-info shadow h-100 py-2 bg-black">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-lg font-weight-bold text-info text-uppercase mb-1">Agua mineral
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-100">89 <span
                                    class="text-xs font-weight-lighter ">/ productos en stok.</span> </div>
                        </div>
                        <div class="col-auto">
                            <!-- <i class="fas fa-user fa-2x text-gray-300"></i> -->
                            <i class="fas fa-boxes fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-12 mb-4">
            <div class="card border-left-info shadow h-100 py-2 bg-black">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-lg font-weight-bold text-info text-uppercase mb-1">Gatorade
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-100">89 <span
                                    class="text-xs font-weight-lighter ">/ productos en stok.</span> </div>
                        </div>
                        <div class="col-auto">
                            <!-- <i class="fas fa-user fa-2x text-gray-300"></i> -->
                            <i class="fas fa-boxes fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-12 mb-4">
            <div class="card border-left-info shadow h-100 py-2 bg-black">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-lg font-weight-bold text-info text-uppercase mb-1">Powerade
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-100">89 <span
                                    class="text-xs font-weight-lighter ">/ productos en stok.</span> </div>
                        </div>
                        <div class="col-auto">
                            <!-- <i class="fas fa-user fa-2x text-gray-300"></i> -->
                            <i class="fas fa-boxes fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-12 mb-4">
            <div class="card border-left-info shadow h-100 py-2 bg-black">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-lg font-weight-bold text-info text-uppercase mb-1">Agua cielo 200ml
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-100">89 <span
                                    class="text-xs font-weight-lighter ">/ productos en stok.</span> </div>
                        </div>
                        <div class="col-auto">
                            <!-- <i class="fas fa-user fa-2x text-gray-300"></i> -->
                            <i class="fas fa-boxes fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection