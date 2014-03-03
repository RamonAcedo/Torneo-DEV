<html>
	<head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	    <title>Admin Panel |</title>
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
	<!-- Navbar -->
    <div class="navbar navbar-inverse navbar-static-top ">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">TorneoDeVerano</a>
        </div>
        <div class="navbar-collapse collapse navbar-inverse-collapse">
            <ul class="nav navbar-nav">
                <li>
                    <a href="#">Noticias</a>
                </li>
                <li class="active">
                    <a href="#">Usuarios</a>
                </li>
                <li>
                    <a href="">Fotos</a>
                </li>
                <li>
                    <a href="">Videos</a>
                </li>
                <li>
                    <a href="">Equipos</a>
                </li>
                <li>
                    <a href="">Estadisticas</a>
                </li>
                <li>
                    <a href="">Ver Sitio</a>
                </li>
            </ul>
        </div>
        <!-- /.nav-collapse -->
    </div>
    <!-- END NAVBAR -->
    
    <div class="container">
    	@yield('content')
    </div>
	</body>
</html>