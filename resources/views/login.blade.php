<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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

        <div id="pantallalog">

            <div id="izq">
                <h1>Dream Wings</h1><br>
                <img id="logo2" src="img/Logo.jpeg" alt="Logo"><br>
                <form id="loginForm" action="/login" method="post">
                    <label for="email">Correo electrónico:</label><br>
                    <input id="ing" type="email" id="email" name="email" required><br>
                    <label for="password">Contraseña:</label><br>
                    <input id="ing" type="password" id="password" name="password" required><br>
                    <!-- <input id="bot2" href="principal.html" type="submit" value="Iniciar sesión"> -->
                </form>
                <a href="principal.html"><button id="bot2">Iniciar sesión</button></a>
                <a href="index.html"><button id="bot2">Volver</button></a>
            </div>

        </div>

    </div>




    <script>
        setTimeout(function() {
            var mensaje = document.getElementById("pantallalog");
            mensaje.style.opacity = "1"; 
        }, 100); 
    </script>
    <script src="{{ asset('js/controlador.js') }}"></script>

</body>
</html>