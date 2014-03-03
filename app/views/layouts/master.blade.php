<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Torneo de Verano</title>
	<!-- CSS -->
	{{ HTML::style('css/bootstrap.css') }}
	{{ HTML::style('css/theme.css') }}
    {{ HTML::style('css/responsive.css') }}
	<!-- JAVASCRIPT -->
	{{ HTML::script('http://use.edgefonts.net/homenaje:n4:all;open-sans:n7,i7,n8,i8,i4,n3,i3,n4,n6,i6:all.js') }}
	{{ HTML::script('js/jquery-2.0.3.js') }}
	{{ HTML::script('js/bootstrap.js') }}
	{{ HTML::script('js/jquery.tablesorter.js') }}
	<script type="text/javascript"></script>
</head>
<body>
	@if(Session::has('success'))
	<div class="alert alert-success" data-spy="affix">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		<span class="glyphicon glyphicon-ok"></span> <strong>¡Registro Exitoso!</strong>
		{{ Session::get('success') }}
	</div>
	@endif
	<div class="wrapper col-xs-12 col-sm-12 col-md-12 col-lg-12" style="min-width: 320px;">	
		<!-- HEADER -->
		<div class="row">
		    <div class="bars"></div>
		    <div class="col col-lg-12">
		        <div class="account">
		            <ul class="nav navbar-nav navbar-static-top account-options">
		                <li>
		                    <a href="">Iniciar Sesión</a>
		                </li>
		            </ul>
		        </div>
		    </div>
		</div>
		<div class="row">
		    <div class="header">
		        <div class="jumbotron">
		            <div class="container">
		                <div class="row">
		                    <div class="col-lg-12">
		                    {{ HTML::image('/images/logo.png', 'Logo' ,array('class' => 'logo img-responsive')) }}
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!-- end of the section  -->
		
		<!-- NAVBAR SECTION -->
		<div class="row">
		    <div class="bars top-nav"></div>
		    <div id="mainNavbar" class="navbar navbar-inverse" role="navigation">
		        <div class="center-navbar visible-md visible-lg" style="background-color: none;">
		            <ul class="nav nav-justified">
		                <li class="active">
		                    <a id="sponsors" href="#">Patrocinadores</a>
		                </li>
		                <li>
		                    <a href="{{ URL::route('home') }}">Inicio</a>
		                </li>
		                <li>
		                    <a href="">Fotos</a>
		                </li>
		                <li>
		                    <a href="">Videos</a>
		                </li>
		                <li>
		                    <a href="{{ URL::route('convocatoria') }}">Convocatoria</a>
		                </li>
		                <li>
		                    <a href="{{ URL::route('reglas') }}">Reglas</a>
		                </li>
		                <li>
		                	<a href="{{ URL::route('registro.index') }}">Registro</a>
		                </li>
		            </ul>
		        </div>
		        <!-- NAVBAR COLLAPSE -->
		        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		        </button>
		        <div class="hidden-nav hidden-md hidden-lg">
		            <div id="collapse" class="collapse navbar-collapse">
		                <ul class="nav navbar-nav ">
		                    <li class="active">
		                        <a id="sponsors" href="#">Patrocinadores</a>
		                    </li>
		                    <li>
		                        <a href="#">Inicio</a>
		                    </li>
		                    <li>
		                        <a href="">Fotos</a>
		                    </li>
		                    <li>
		                        <a href="">Videos</a>
		                    </li>
		                    <li>
		                        <a href="">Convocatoria</a>
		                    </li>
		                    <li>
		                        <a href="">Reglas</a>
		                    </li>
		                    <li>
		                    	<a href="">Registro</a>
		                    </li>
		                </ul>
		            </div>
		        </div>
		        <!-- END -->
		    </div>
		    <div class="bars top-nav"></div>
		</div>
		<!-- End of the navbar -->

		@yield('preview')

		@yield('content')

		@yield('sidebar')

		<div class="push"></div>
			
		</div>
		<!-- FOOTER -->
		<div class="footer">
		    <div class="bars"></div>
		    <div class="info">
		        <p>Todos los derechos reservados | TorneoVerano2014 | Designed by
		            <a href="">Ramon Acedo</a>
		        </p>
		    </div>
		</div>
		<!-- END -->

</body>
</html>