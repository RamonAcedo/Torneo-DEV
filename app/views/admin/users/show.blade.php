@extends('admin.master') 

@section('content')

<div class="user-info panel panel-primary">
	<div class="panel-heading">
		<h1 class="panel-title">
			Información del Usuario
		</h1>
	</div>
	<div class="panel-body">
		<div class="row">
			<div class="col-sm-6 col-lg-3">
				<h4><strong>Nombre:</strong></h4>
				<p>{{ $usuario->nombre }}</p>
			</div>
			<div class="col-sm-6 col-lg-3">
				<h4><strong>Apellido:</strong></h4>
				<p>{{ $usuario->apellido_p . " " . $usuario->apellido_m }}</p>
			</div>
			<div class="col-sm-6 col-lg-3">
				<h4><strong>Correo:</strong></h4>
				<p>{{ $usuario->email }}</p>
			</div>
			<div class="col-sm-6 col-lg-3">
				<h4><strong>Estatus:</strong></h4>
				<p>
					@if($usuario->activo == 1)
						Activo
					@else
						Inactivo
					@endif
				</p>
			</div>
		</div>
		<br>

		<div class="row">
			<div class="col-lg-3 nombre-equipo">
				<h4><strong>Equipo Activo: </strong></h4>
				<div class="well">
					<p class="team-name">
						Nombre del equipo
					</p>
				</div>
			</div>
			<div class="col-lg-9 jugadores">
				<div class="row">
					<div class="col-lg-3">
						<div class="jugador">
							<h4>Jugador 1</h4>
							<h1>01</h1>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="jugador">
							<h4>Jugador 2</h4>
							<h1>02</h1>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="jugador">
							<h4>Jugador 3</h4>
							<h1>03</h1>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="jugador">
							<h4>Jugador</h4>
							<h1>04</h1>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-3">
						<div class="jugador">
							<h4>Jugador 5</h4>
							<h1>05</h1>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="jugador">
							<h4>Jugador 6</h4>
							<h1>06</h1>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="jugador">
							<h4>Jugador 7</h4>
							<h1>07</h1>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="jugador">
							<h4>Jugador 8</h4>
							<h1>08</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<form action="post" class="pull-right">
					<input type="submit" class="btn btn-primary" value="Eliminar Usuario">
				</form>
			</div>
		</div>
	</div>
</div>

@stop
