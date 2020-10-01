@extends('plantilla')
@section('css')

@endsection
@section('gClientes_active')
active
@endsection
@section('main')
<div class="container-fluid">
    <!-- DONDE SE ENCUENTRA -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Gestión Clientes</h1>
    </div>
    <!-- AGREGAR -->
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            <button type="button" class="btn btn-primary my-4" data-toggle="modal" data-target="#registrarClienteModal">
                <i class="fas fa-user-plus"></i>
                Nuevo Cliente
            </button>
        </div>
    </div>
    @if(session('crear_usu'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Registro realizado!</strong> se ha agregado un cliente de manera exitosa.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <!-- TABLA -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-danger">Registro de clientes</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-gym table-dark table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>CI</th>
                            <th>Apellido</th>
                            <th>Nombre</th>
                            <th>Tipo</th>
                            <th><i class="fas fa-info-circle"></i> Info</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1712957369</td>
                            <td>Vaca</td>
                            <td>Eric</td>
                            <td>Mensual</td>
                            <td><a href="{{route('clientes.perfil')}}" class="btn btn-sm btn-primary">Perfil</a></td>
                        </tr>
                        <tr>
                            <td>1727676676</td>
                            <td>Vaca</td>
                            <td>Alex</td>
                            <td>Diario</td>
                            <td><a href="{{route('clientes.perfil')}}" class="btn btn-sm btn-primary">Perfil</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
@section('modal')
<div class="modal fade" id="registrarClienteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Registrar cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- <div class="alert alert-danger" role="alert">
                        <h4 class="alert-heading">Error</h4>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae vitae, quasi totam ratione expedita accusamus eaque tempore in enim iure ipsam qui voluptatum ex reiciendis saepe inventore animi quo nulla?
                        </p>
                    </div> -->
                <form action="">
                    <div class="row mb-2">
                        <div class="col">
                            <!-- AGREGAR (is-valid) 0 (is-invalid) para mostrar el estado de un input -->
                            <input type="text" class="form-control" placeholder="CI">
                            <!-- Caso error -->
                            <!-- <div class="ml-1" style="color:red;">
                                    Muestra primer error
                                </div> -->
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col">
                            <input type="text" class="form-control form-control" placeholder="Apellido">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control form-control" placeholder="Nombre">
                            <!-- <div class="ml-1 text-danger">
                                    Muestra primer error
                                </div> -->
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Celular">
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
@section('js')
<!-- SCRIPS TABLAS -->

@endsection