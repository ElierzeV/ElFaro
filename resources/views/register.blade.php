@extends('layout')

@section('content1')

<div class="row justify-content-center pb-3"  >
    <div class="row justify-content-center" style="width: 90%;">
    
    <form id="formRegister" class="row g-3 needs-validation p-2 justify-content-center " onsubmit="verificarPasswords(); return false">
        <div class="col-md-12">
            <h2 class="text-center">Registro</h2>
        </div>
        <!--Name-->
        <div class="form-floating mb-3 col-md-6 ml-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Pedro" required>
            <label for="floatingInput">Nombre</label>
        </div>
        <!--Last name-->
        <div class="form-floating mb-3 col-md-6 ml-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Perez" required>
            <label for="floatingInput">Apellido</label>
        </div>
        <!--e-mail-->
        <div class="form-floating mb-3 ml-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="nombre@ejemplo.cl" required>
            <label for="floatingInput">Correo Electrónico</label>
        </div>
        <!--Password-->
        
        <div class="form-floating">
            <input type="password" class="form-control" id="pass1" placeholder="Contraseña" required>
            <label for="floatingPassword">Contraseña</label>
        </div>
        <!--Confirm Pass-->
        <div class="form-floating">
            <input type="password" class="form-control" id="pass2" placeholder="Confirmar Contraseña" required>
            <label for="floatingPassword">Confirme Contraseña</label>
        </div>
        <div id="msg"></div>

        <!-- Mensajes de Verificación -->
        <div id="error" class="alert alert-danger ocultar" role="alert">
            Las contraseñas no son iguales
        </div>
        <div id="ok" class="alert alert-success ocultar" role="alert">
            Las Contraseñas coinciden ! (Procesando formulario ... )
        </div>
        <!-- Fin Mensajes de Verificación -->

        <!--Aceptar terminos y condiciones-->
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
        <!--submit button-->
        <div class="col-12 text-center">
            <button class="btn btn-primary" type="submit" id="login">Enviar</button>
        </div>
    </form>  
</div>
@endsection