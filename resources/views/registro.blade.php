<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <link rel="shortcut icon" href="img/Logo.jpeg" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/74d07557bf.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- <div class="animate"></div> -->

    <div id="fondo">
        <canvas id="particle-canvas"></canvas>
    </div>

    <div id="contenido">
        <div id="pantallareg">
            <div id="izq2">
                <h1>Registro de Usuario</h1>
                <form id="formularioRegistro" action="{{route('registrar')}}" method="POST">
                    @csrf
                    @method('POST')
                    <label for="nombre">Nombre:</label><br>
                    <input type="text" id="ing" name="nombre" required><br>
            
                    <label for="apellido">Apellido:</label><br>
                    <input type="text" id="ing" name="apellido" required><br>
            
                    <label for="correo">Correo electrónico:</label><br>
                    <input id="ing" type="email" id="email" name="email" required><br>
            
                    <label for="contrasena">Contraseña:</label><br>
                    <input type="password" id="ing" name="contrasena" required><br>
            
                    <label for="telefono">Teléfono:</label><br>
                    <input type="tel" id="ing" name="telefono" required><br>

                    <label for="codigoclientefrecuente">CodigoClienteFrecuente:</label><br>
                    <input type="text" id="ing" name="ccf" required><br>
            
                    <!-- <input href="index.html" id="bot2" type="submit" value="Registrarse"> -->
                </form>
                <a href="usuario"><button id="bot2">Registrarse</button></a>
                <a href="home"><button id="bot2">Volver</button></a>
            </div>
        </div>

    <script>
        setTimeout(function() {
            var mensaje = document.getElementById("pantallareg");
            mensaje.style.opacity = "1";
        }, 100);
    </script>
    <script src="{{ asset('js/controlador.js') }}"></script>

</body>
</html>