<html>

<head>
    <meta charset="utf-8">
    <title>Mensaje de Confirmación</title>
    <style type="text/css">
        *{
            font-family: sans-serif;
            color: black;
        }
        body{
            background-color: #222;
        }
        .container{
            width: 90%;
            margin: 0px auto;
            text-align: center;
            background-color: #eee;
            padding-bottom: 20px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.36);
        }
        .container h1{
            background-color: #fd9329;
            padding: 10px;
            color: white;
            text-shadow: 0 1px 2px black;
        }
        .container p{
            font-size: 20px;
            padding: 10px;
        }
        .container a{
            text-decoration: none;
            color: #e37a12;
            font-weight: bold;
        }
        
    </style>
</head>

<body>
    <div class="container">
        <h1>Gracias por registrarte en TorneoVerano 2014</h1>
        <p>
            Usuario:{{ $username }} y Contraseña: {{ $password }}
        </p>
        <p>
            Es imprescindible para la activación de tu cuenta subas la ficha de tu pago por el ingreso al torneo, según lo estipulado en la
            <a href="">Convocatoria.</a>De esta forma quedarás oficialmente inscrito dentro del torneo una vez que se valide tu pago. Además, recibirás información extra sobre los eventos y cualquier suceso importante dentro de la administración del torneo.
        </p>
        <p>Una vez recibido y aprobado tu pago, podrás acceder de forma inmediata al registro de tu equipo con sus correspondientes integrantes.</p>
        <p>
            Para cualquier otra información, por favor contactate al siguiente correo:         <a href="">uvm@gmail.com</a>
        </p>
    </div>
</body>

</html>