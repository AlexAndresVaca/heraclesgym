@extends('plantilla')
@section('gProductos_active')
active
@endsection
@section('main')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <!-- DONDE SE ENCUENTRA -->
        <h1 class="h3 mb-0 text-gray-800">Detalles de producto: <strong class="text-gray-900">Agua mineral</strong>
            <span class="text-xs">P001</span>
        </h1>
    </div>
    <div class="card">
        <div class="card-header">
            <h6>Editar información</h6>
        </div>
        <form class="needs-validation" novalidate>
            <div class="card-body">
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom01">Descripción</label>
                        <!-- AGREGAR is-valid si no tiene errores o is-invalid si tiene errores !!Si tiene errores automaticamente carga el feedback -->
                        <input type="text" class="form-control" id="validationCustom01" value="Agua mineral" required>
                        <div class="invalid-feedback">
                            <!-- CARGAR AQUI LOS ERRORES DE VALIDACION -->
                            Campo obligatorio
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom02">Stock</label>
                        <input type="number" class="form-control" id="validationCustom02" value="1" required>
                        <div class="invalid-feedback">
                            Solo debe ingresar números
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a href="{{route('productos.index')}}"><button type="button" class="btn btn-outline-secondary"><i
                            class="fas fa-chevron-left"></i> Volver</button></a>
                <button class="btn btn-primary" type="submit">Guardar cambios</button>
            </div>
        </form>
    </div>
</div>
@endsection
@section('js')
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
@endsection