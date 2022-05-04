@extends('layout')

@section('content1')

<div class="row justify-content-center pb-3">
    <div class="row justify-content-center" style="width: 90%;">
        <form class="row g-3 needs-validation p-2" novalidate>
            <div class="col-md-12">
                <h2 class="text-center">Contacto</h2>
            </div>
            
            <div class="col-md-6 text-center ml-3">
                <label for="validationCustom01" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="validationCustom01" placeholder="Nombre" required>
            </div>
            <div class="col-md-6 text-center">
                <label for="validationCustom02" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="validationCustom02"  placeholder="Apellido"  required>
            </div>
            <div class="col-md-12 mb-3">
                <label for="exampleFormControlInput1" class="form-label">Dirección de correo</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nombre@ejemplo.com" required>
            </div>
            <div class="col-md-12 mb-3">
                <label for="validationCustom03" class="form-label">Explique el motivo de contactarse con nosotros:</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
            </div>
            <div class="col-12">
                <div class="form-check col-md-6">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                        Acepta terminos y condiciones.
                    </label>
                    <div class="invalid-feedback">
                        Error al enviar, acepte los terminos y condiciones
                    </div>
                </div>
            </div>
            <div class="col-12 text-center">
                <button class="btn btn-primary" type="submit">Enviar</button>
            </div>
        </form>
    </div>
</div>


@endsection