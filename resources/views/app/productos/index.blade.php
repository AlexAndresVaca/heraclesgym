@extends('plantilla')
@section('gProductos_active')
active
@endsection
@section('main')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <!-- DONDE SE ENCUENTRA -->
        <h1 class="h3 mb-0 text-gray-800">Gestión Productos</h1>
    </div>
    <!-- Agregar  -->
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            <button type="button" class="btn btn-primary my-4" data-toggle="modal"
                data-target="#registrarProductoModal">
                <i class="fas fa-boxes"></i>
                Nuevo Producto
            </button>
        </div>
    </div>
    <!-- CUANDO REGISTRE UN NUEVO PRODUCTO -->
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Registro realizado!</strong> se ha agregado un producto de manera exitosa.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-danger">Lista de productos</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-gym table-dark table-bordered" id="example" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#COD</th>
                            <th>Descripción</th>
                            <th>Stock</th>
                            <th class="text-center w-150px"><i class="fas fa-info-circle"></i> Info</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>P001</td>
                            <td>Agua mineral</td>
                            <td>50</td>
                            <td><a href="{{route('productos.detalles')}}" class="btn btn-sm btn-primary d-block mx-auto w-75px">Detalles</a>
                            </td>
                        </tr>
                        <tr>
                            <td>P002</td>
                            <td>Gatorade</td>
                            <td>25</td>
                            <td><a href="{{route('productos.detalles')}}" class="btn btn-sm btn-primary d-block mx-auto w-75px">Detalles</a>
                            </td>
                        </tr>
                        <tr>
                            <td>P003</td>
                            <td>Powerade</td>
                            <td>25</td>
                            <td><a href="{{route('productos.detalles')}}" class="btn btn-sm btn-primary d-block mx-auto w-75px">Detalles</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
@section('modal')
<div class="modal fade" id="registrarProductoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar producto</h5>
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
                            <!-- <input type="text" class="form-control" placeholder="CI"> -->
                            <!-- Caso error -->
                            <!-- <div class="ml-1" style="color:red;">
                                Muestra primer error
                            </div> -->
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col">
                            <input type="text" class="form-control " placeholder="Nombre el producto">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col">
                            <input type="number" class="form-control" placeholder="Stock inicial" value="0">
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