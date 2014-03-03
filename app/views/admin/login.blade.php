<html>
	<head>
		<meta charset="utf-8" />
		<title>Iniciar Sesión</title>
	    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	    <link href="http://netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css" rel="stylesheet">   
	    {{ HTML::style('css/bootstrap-admin.css'); }}
	    {{ HTML::style('css/index.css'); }}
	    {{ HTML::style('css/theme-admin.css'); }}
	   	{{ HTML::script('js/jquery-2.0.3.js'); }} 
	    {{ HTML::script('js/bootstrap.js'); }}
	    {{ HTML::script('js/jquery.hotkeys.js'); }}
	   	{{ HTML::script('js/bootstrap.wysiwyg.js'); }}
	</head>
	<body>
	@if(Session::has('flash_error'))
	<div class="alert btn-primary alert-danger alert-login alert-dismissable">
		  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		  <strong>¡Error!</strong> {{ Session::get('flash_error') }}
	</div>	
	@endif
	<!-- ADMIN LOGIN -->
	    <div class="block">
	        <div class="container login" style="max-width: 450px; background-color: white;">
	            {{ Form::open(array('url' => 'admin/login')) }}
	                <h1 align="center">Panel de Administración</h1>
	                <hr>
	                <div class="input-group form-group">
	                    <span class="input-group-addon">
	                        <span class="glyphicon glyphicon-user"></span>
	                    </span>
	                    <input required name="username" type="text" class="form-control" id="exampleInputEmail1" placeholder="Nombre de Usuario">
	                </div>
	                <div class="input-group form-group">
	                    <span class="input-group-addon">
	                        <span class="glyphicon glyphicon-lock"></span>
	                    </span>
	                    <input required name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
	                </div>
	                <hr>
	                <button type="submit" class="btn btn-primary col-lg-12">Iniciar Sesión</button>
	                <br>
	                <br>
	            </form>
	        </div>
	    </div>
	<!-- END -->
	</body>
</html>