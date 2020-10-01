@extends('plantilla')
@section('productos_active')
active
@endsection
@section('main')
<div class="dropdown-divider"></div>
<div class="container-fluid">
    <div class="card my-4">
        <h5 class="card-header ">Vender un producto</h5>
        <div class="card-body">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Venta registrada!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Se devolvio un producto!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form>
                <div class="row">
                    <div class="col-lg-4 my-2 col-sm-12">
                        <input type="text" class="form-control" id="autocomplete" placeholder="Producto">
                    </div>
                    <div class="col-lg-4 my-2 col-sm-12">
                        <input type="number" class="form-control col-lg-5" placeholder="Cant" value="">
                    </div>
                    <div class="col-lg-4 my-2 col-sm-12">
                        <button type="submit" class="btn btn-success btn-block">
                            <i class="fas fa-cash-register"></i> Vender
                        </button>
                    </div>
                </div>
            </form>
            <form>
                <div class="row">
                    <div class="col-lg-4 my-2 col-sm-12">
                        <input type="text" class="form-control" id="autocomplete2" placeholder="Producto">
                    </div>
                    <div class="col-lg-4 my-2 col-sm-12">
                        <input type="number" class="form-control col-lg-5" placeholder="Cant" value="">
                    </div>
                    <div class="col-lg-4 my-2 col-sm-12">
                        <button type="submit" class="btn btn-danger btn-block">
                            <i class="fas fa-cash-register"></i> Devolver
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="card my-4">
        <h5 class="card-header">Abastecer productos</h5>
        <div class="card-body">
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                <strong>Se abastecio con éxito el producto!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form>
                <div class="row">
                    <div class="col-lg-4 my-2 col-sm-12">
                        <input type="text" class="form-control" id="autocomplete3" placeholder="Producto">
                        @if(session('error'))
                        <div class="ml-2 text-danger is-invalid">
                            Error
                        </div>
                        @endif
                    </div>
                    <div class="col-lg-4 my-2 col-sm-12">
                        <input type="number" class="form-control col-lg-5" placeholder="Cant" value="">
                        @if(session('error'))
                        <div class="ml-2 text-danger is-invalid">
                            Error
                        </div>
                        @endif
                    </div>
                    <div class="col-lg-4 my-2 col-sm-12">
                        <button type="submit" class="btn btn-info btn-block">
                            <i class="fas fa-store"></i> Cargar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
var lista = ['Gatorade', 'Powerade', 'Agua mineral'];
$('#autocomplete').autocomplete({
    source: lista
});
$('#autocomplete2').autocomplete({
    source: lista
});
$('#autocomplete3').autocomplete({
    source: lista
});
</script>
@endsection