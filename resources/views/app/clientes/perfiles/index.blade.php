@extends('plantilla') @section('gClientes_active') active @endsection @section('main')
<!-- ENCABEZADO GINGANTE -->
<div class="jumbotron jumbotron-fluid p-1">
    <div class="container">
        <h1 class="display-4 text-gray-900">Perfil de usuario</h1>
        <p class="lead">
            <ul>
                <li><span class="font-weight-bold text-gray-900">CI: </span>1722737477</li>
                <li><span class="font-weight-bold text-gray-900">Nombres: </span>Alex Vaca</li>
                <!-- CALCULADO EN CONTROLADOR -->
                <li><span class="font-weight-bold text-gray-900">Tipo: </span>Subcripcion mensual</li>
                <li><span class="font-weight-bold text-gray-900">Tipo: </span>Diario</li>
                <li><span class="font-weight-bold text-gray-900">Celular: </span>0985698745</li>
            </ul>
        </p>
        @if(session('cuenta'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Pago expirado!</strong> Por favor, informe al cliente que su pago a caducado.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif @if(session('cuenta'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Subscripción Válida!</strong> Fecha de expiracion: <strong>21 de mayo</strong>.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
        </div>
        @endif
    </div>
</div>
<div class="container ">
    <div class="row">
        <div class="col-md-auto col-lg-6">
            <div class="row">
                <div class="col d-flex justify-content-center">
                    <button class="btn btn-primary my-4" data-toggle="modal" data-target="#registrarClienteModal">
                    <i class="fas fa-file-invoice"></i>
                     Nuevo Pago
                </button>
                </div>
            </div>
            <!-- Content Row MAIN-->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h5 class="m-0 font-weight-bold text-gray-900">Pagos</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-gym table-dark table-bordered" id="tablaPagos" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Fecha de pago</th>
                                    <th>Fecha de expiracion</th>
                                    <th>Anotación</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>U-1000</td>
                                    <td>mayo 21</td>
                                    <td>junio 21</td>
                                    <td>Reacondicionamiento fisico</td>
                                </tr>
                                <tr>
                                    <td>U-1001</td>
                                    <td>2020-08-16</td>
                                    <td>2020-09-16</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Content Row FIN MAIN-->


        </div>
        <div class="col-md-auto col-lg-6">
            <div class="row">
                <div class="col d-flex justify-content-center">
                    <a href="{{route('clientes.medidas.registrar')}}" class="btn btn-primary my-4 text-gray-100">
                        <i class="fas fa-weight"></i> Nuevo registro de medidas
                    </a>
                </div>
            </div>
            <!-- Content Row MAIN-->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h5 class="m-0 font-weight-bold text-gray-900">Medidas</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-gym table-dark table-bordered" id="tablaMedidas" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Fecha de registro</th>
                                    <th><i class="fas fa-info-circle"></i> Info</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>C-1000</td>
                                    <td>mayo 21</td>
                                    <td><a href="{{route('clientes.medidas')}}" class="btn btn-sm btn-primary">Ver</a></td>
                                </tr>
                                <tr>
                                    <td>C-1001</td>
                                    <td>2020-08-16</td>
                                    <td><a href="{{route('clientes.medidas')}}" class="btn btn-sm btn-primary">Ver</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Content Row FIN MAIN-->
        </div>
    </div>
</div>
@endsection @section('modal')
<div class="modal fade" id="registrarClienteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Registrar Pago</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-info" role="alert">
                    <h4 class="alert-heading">Vas a registrar un nuevo pago?</h4>
                    <p>
                        El pago se registrará con fecha de hoy <span class="font-weight-bold">21 de mayo</span> y expirará el día <span class="font-weight-bold">21 de junio</span>.
                    </p>
                </div>
                @if(session('pago'))
                <div class="alert alert-warning" role="alert">
                    <h4 class="alert-heading">Atención!</h4>
                    <p>
                        El cliente <span class="font-weight-bold">Vaca Alex</span> actualmente consta con un pago válido!
                    </p>
                </div>
                @endif
                <form action="">
                    <div class="row mb-2">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Código">
                            <!-- Caso error -->
                            <!-- <div class="ml-1" style="color:red;">
                                                Muestra primer error
                                            </div> -->
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Anotacion">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Registrar</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection