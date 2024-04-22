<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla</title>
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

        <div id="pantallapri">

            <header id="hea">
                <img id="logo3" src="img/Logo.jpeg" alt="Logo"><br>
            </header>

            <div id="con">

                <div id="fot4">
                    <div class="text-overlay">
                        <div class="tit">
                            <h3 style="color: #ffffff;">TABLAS DE VUELOS</h3>
                        </div>
                    </div>
                    <div id="regtab">
                        <table>
                            <thead>
                                <tr>
                                    <th>País de Origen</th>
                                    <th>País de Aterrizaje</th>
                                    <th>Fecha</th>
                                    <th>Hora</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Estados Unidos</td>
                                    <td>España</td>
                                    <td>21/04/2024</td>
                                    <td>14:30</td>
                                    <td><a href="avion.html"><button class="comprar-btn">Comprar</button></a></td>
                                </tr>
                                <!-- Agrega más filas según sea necesario -->
                            </tbody>
                        </table>
                        
                    </div>
                    <a href="principal.html"><button id="bot2">Volver</button></a>
                </div>

            </div>

        </div>

    </div>




    <script>
        setTimeout(function() {
            var mensaje = document.getElementById("pantallapri");
            mensaje.style.opacity = "1"; 
        }, 100);
    </script>
    <script src="{{ asset('js/controlador.js') }}"></script>

</body>
</html>