@extends('public/ingreso/plantillaIngreso')
@section('bg')
bg-black-b
@endsection
@section('ingreso')
active
@endsection
@section('main')

<div class="jumbotron jumbotron-fluid bg-secondary text-gray-100">
    <div class="container">
        <h1 class="display-4 text text-uppercase">
            <i class="fas fa-dumbbell rotate-n-15 "></i>
            Ingreso de clientes
        </h1>
        <p class="lead">Para anotarte debes estar estar registrado en <strong class="text-uppercase">&copy; Heracles
                GYM System 2020</strong>.</p>
        <p class="lead">
        <ul>
            <li>Puedes registrarte ya seas de <strong>pago mensual</strong> o de <strong>pago diario</strong>.</li>
            <li>Si aun no estas registrado en el sistema <strong>solicita a un encargado</strong> tu registro.</li>
        </ul>
        </p>
    </div>
</div>
<div class="container">
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <p class="display-4 mb-0">
            <strong>Su pago esta próximo a expirar!</strong><br>
            Cliente <strong class="">(Vaca Alex) </strong> tu pago expira el día <strong>21 de mayo</strong>.
        </p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <p class="display-4 mb-0">
            <strong>Registro correcto!</strong><br>
            Cliente <strong>(Vaca Alex)</strong> tu pago expira el día <strong>21 de mayo</strong>.
        </p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <p class="display-4 mb-0">
            <strong>Registro correcto!</strong><br>
            Cliente <strong>(Vaca Alex)</strong> subscripción diaria.
        </p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <p class="display-4 mb-0">
            <strong>Tu subscripción ha caducado!</strong><br>
            Cliente <strong>(Vaca Alex)</strong> tu pago expiró el día <strong>21 de mayo</strong>.
        </p>
        <form class="row justify-content-end" action="">
            <button class="d-inline btn btn-success"><i class="fa fa-info-circle"></i> Entiendo, cambiame a subscripción
                diaria
            </button>
        </form>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <p class="display-4 mb-0">
            <strong>Alerta!</strong><br>
            Cliente <strong>(Vaca Alex)</strong> ya tienes un registro de entrada el día <strong>21 de mayo</strong>.
        </p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <form action="" class="py-3 mb-5">
        <div class="form-group row">
            <label for="colFormLabelLg"
                class="col-sm-2 col-form-label text-gray-900 col-form-label-lg">Credenciales</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-lg" id="colFormLabelLg"
                    placeholder="CI o Apellido y Nombre">
                <div class="ml-2 text-danger">
                    No se encuentran registros
                </div>
            </div>
        </div>

        <button type="submit" class="mx-auto col-6 btn btn-danger btn-lg btn-block">Registrar</button>
        <a href="{{route('heracles.ingreso')}}" class="mx-auto col-6 btn btn-secondary btn-lg btn-block">Volver</a>
    </form>
</div>
@endsection