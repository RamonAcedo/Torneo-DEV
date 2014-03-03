@extends('layouts.master')

@section('content')
<!-- MAIN CONTENT -->
<div class="row">
    <!--  MAIN CONTENT -->
    <div id="content" class="col col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <br>
        <h1>Registro</h1>
        <hr>
        <div class="row">
            <div class="col-md-4">
                {{ Form::open(array('route' => 'registro.store', 'class' => 'form')) }}

                <div class="form-group">
                    <label for="username">Nombre de Usuario</label>
                    <input type="text" name="username" class="form-control">
                        {{ $errors->first('username', '<div class="label label-danger">:message</div>') }}
                </div>

                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" class="form-control">
                    {{ $errors->first('nombre', '<div class="label label-danger">:message</div>') }}
                </div>

                <div class="form-group">
                    <label for="apellido_p">Apellido Paterno</label>
                    <input type="text" name="apellido_p" class="form-control">
                    {{ $errors->first('apellido_p', '<div class="label label-danger">:message</div>') }}
                </div>

                <div class="form-group">
                    <label for="apellido_m">Apellido Materno</label>
                    <input type="text" name="apellido_m" class="form-control">
                    {{ $errors->first('apellido_m', '<div class="label label-danger">:message</div>') }}
                </div>

                <div class="form-group">
                    <label for="email">Correo Electrónico</label>
                    <input type="text" name="email" class="form-control">
                    {{ $errors->first('email', '<div class="label label-danger">:message</div>') }}
                </div>

                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" name="password" class="form-control">
                    {{ $errors->first('password', '<div class="label label-danger">:message</div>') }}
                </div>

                <div class="form-group">
                    <label for="password_confirmation">Confirmar Contraseña</label>
                    <input type="password" name="password_confirmation" class="form-control">
                    {{ $errors->first('password_confirmation', '<div class="label label-danger">:message</div>') }}
                </div>

                <div class="form-group">
                    <input type="submit" value="Registrar" class="btn btn-warning col-xs-12 col-sm-12 col-md-12">
                </div>

                {{ Form::close() }}
            </div>
            <div class="col-md-8">
                <div class="well">
                    <h1>Instrucciones</h1>
                    <p>Es importante que rellenes los campos con la información correcta, de esta manera podras continuar con el proceso de inscripción al evento</p>
                    <p>Introduce un <strong>nombre de usuario único</strong> para poder iniciar sesión en el sitio</p>
                    <p>Completa los campos <strong>con tu información personal</strong>: Nombre real y apellidos</p>
                    <p>Proporciona tu <strong>correo electrónico</strong> para poder comunicarnos contigo</p>
                    <p>Finalmente una <strong>una contraseña mayor a 6 caracteres</strong> que servirá para tu seguridad</p>
                    <hr>
                    <p>Una vez que hayas cumplido con estos pasos recibirás información en tu correo de como continuar con el proceso de activación de tu registro</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end of section -->
@stop