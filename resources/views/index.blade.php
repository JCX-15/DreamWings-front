<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
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

        <div id="pantalla">
            <h1>Bienvenidos a Dream Wings</h1><br>

            <img id="logo" src="img/Logo.jpeg" alt="Logo"><br>

            <a href="login.html"><button id="bot">Login</button></a>
            <a href="registro.html"><button id="bot">Registrarse</button></a>

        </div>

    </div>




    <script>
        setTimeout(function() {
            var mensaje = document.getElementById("pantalla");
            mensaje.style.opacity = "1";
        }, 100);
    </script>
    <script src="{{ asset('js/controlador.js') }}"></script>
</body>
</html>