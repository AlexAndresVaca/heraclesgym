@extends('plantilla') 
@section('gClientes_active')
active
@endsection
@section('main')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <!-- Cambiar Menu por nombre de la pagina donde se encuentre -->
        <h1 class="h1 mb-0 text-gray-800">Registro de medidas</h1>
    </div>
    <!-- Content Row MAIN-->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-black">Nueva toma de medidas (Hombre)</h5>
        </div>
        <div class="card-body">
            <form>
                <div class="form-row">
                    <span class="h3 col-md-3 mr-3 text-gray-800">Datos generales:</span>
                    <div class="col-lg-2 mb-3">
                        <label for="peso">Peso</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="peso" required>
                            <div class="input-group-append">
                                <span class="input-group-text">kg</span>
                            </div>
                        </div>
                        <!-- <div class="ml-1" style="color:red;">
                        Looks good!
                    </div> -->
                    </div>
                    <div class="col-lg-2 mb-3">
                        <label for="talla">Talla</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="talla" required>
                            <div class="input-group-append">
                                <span class="input-group-text">m</span>
                            </div>
                        </div>
                        <!-- <div class="ml-1" style="color:green;">
                        Looks good!
                    </div> -->
                    </div>
                </div>
                <div class="dropdown-divider"></div>
                <div class="form-row">
                    <span class="h3 col-md-3 mr-3 text-gray-800">Parte superior: </span>
                    <div class="col-md-2 mb-3">
                        <label for="biceps">Biceps</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="biceps" required>
                            <div class="input-group-append">
                                <span class="input-group-text">cm</span>
                            </div>
                        </div>
                        <!-- <div class="ml-1" style="color:red;">
                        Looks good!
                    </div> -->
                    </div>
                    <div class="col-md-2 mb-3">
                        <label for="triceps">Triceps</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="triceps" required>
                            <div class="input-group-append">
                                <span class="input-group-text">cm</span>
                            </div>
                        </div>
                        <!-- <div class="ml-1" style="color:green;">
                        Looks good!
                    </div> -->
                    </div>
                    <div class="col-md-2 mb-3">
                        <label for="cintura">Cintura</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="cintura" required>
                            <div class="input-group-append">
                                <span class="input-group-text">cm</span>
                            </div>
                        </div>
                        <!-- <div class="ml-1" style="color:green;">
                        Looks good!
                    </div> -->
                    </div>
                    <div class="col-md-2 mb-3">
                        <label for="espalda">Espalda</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="espalda" required>
                            <div class="input-group-append">
                                <span class="input-group-text">cm</span>
                            </div>
                        </div>
                        <!-- <div class="ml-1" style="color:green;">
                        Looks good!
                    </div> -->
                    </div>
                </div>
                <div class="form-row">
                    <span class="h3 col-md-3 mr-3 text-gray-800"></span>
                    <div class="col-md-2 mb-3">
                        <label for="pectoral">Pectoral</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="pectoral" required>
                            <div class="input-group-append">
                                <span class="input-group-text">cm</span>
                            </div>
                        </div>
                        <!-- <div class="ml-1" style="color:red;">
                        Looks good!
                    </div> -->
                    </div>
                </div>
                <div class="dropdown-divider"></div>
                <div class="form-row">
                    <span class="h3 col-md-3 mr-3 text-gray-800">Parte Inferior: </span>
                    <div class="col-md-2 mb-3">
                        <label for="muslo1">Muslo 1</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="muslo1" required>
                            <div class="input-group-append">
                                <span class="input-group-text">cm</span>
                            </div>
                        </div>
                        <!-- <div class="ml-1" style="color:green;">
                        Looks good!
                    </div> -->
                    </div>
                    <div class="col-md-2 mb-3">
                        <label for="muslo2">Muslo2</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="muslo2" required>
                            <div class="input-group-append">
                                <span class="input-group-text">cm</span>
                            </div>
                        </div>
                        <!-- <div class="ml-1" style="color:green;">
                        Looks good!
                    </div> -->
                    </div>
                    <div class="col-md-2 mb-3">
                        <label for="pantorrilla">Pantorrillas</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="pantorrilla" required>
                            <div class="input-group-append">
                                <span class="input-group-text">cm</span>
                            </div>
                        </div>
                        <!-- <div class="ml-1" style="color:red;">
                        Looks good!
                    </div> -->
                    </div>
                </div>
                <div class="dropdown-divider"></div>
                <div class="my-5">
                </div>
                <div class="form-row">
                    <div class="col">
                        <a href="{{route('clientes.perfil')}}" class="btn btn-outline-secondary"><i class="fas fa-chevron-left"></i> Volver</a>
                    </div>
                    <div class="col">
                        <button class="btn btn-primary" type="submit">Registrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Content Row FIN MAIN-->
</div>
@endsection