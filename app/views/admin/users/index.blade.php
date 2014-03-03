@extends('admin.master')

@section('content')
	<div class="row">
		<div class="col col-md-7">
			<div class="row">
				<div class="users">
					<table class="table table-condensed"
						style="background-color: white; border-radius: 4px;">
						<thead class="btn-primary" style="color: white;">
							<tr>
								<th>ID</th>
								<th>Nombre</th>
								<th>Registro</th>
								<th>Activo</th>
								<th>Opciones</th>
							</tr>
						</thead>
						<tbody>
							@foreach($users as $user)
							<tr>
								<td>{{ $user->id }}</td>
								<td>{{ $user->nombre . " " . $user->apellido_p }}</td>
								<td>{{ $user->created_at }}</td>
								<td class="active-user">
									@if($user->activo == 1)
										Si
									@else
										No
									@endif
								</td>
								<td>
									@if($user->activo == 1)
									<button disabled class="btn btn-small">
										<i class="glyphicon glyphicon-check"></i>Activado
									</button>
									@else
									<button class="btn btn-small btn-success">
										<i class="glyphicon glyphicon-check"></i>Activar
									</button>
									@endif
									<a href="{{ URL::to('admin/usuarios/' . $user->id) }}" class="btn btn-small btn-default">
										<i class="glyphicon glyphicon-search"></i>Info
									</a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="col col-md-5">
			<div class="col col-xs-3 ">
				<h3 class="teams-info btn-primary">
					Usuarios
					<p>100</p>
				</h3>
			</div>
			<div class="col col-xs-3 ">
				<h3 class="teams-info btn-primary">
					Equipos
					<p>20</p>
				</h3>
			</div>
			<div class="col col-xs-3">
				<h3 class="teams-info btn-primary">
					Activos
					<p>86</p>
				</h3>
			</div>
			<div class="col col-xs-3">
				<h3 class="teams-info btn-primary">
					Inactivos
					<p>14</p>
				</h3>
			</div>
		</div>
	</div>
<!-- END -->

@stop