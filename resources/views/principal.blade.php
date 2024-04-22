<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
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
                <a href="usuario"><button id="bot2">Usuario</button></a>
                <a href="registro"><button id="bot2">Otro</button></a>
                <a href="login"><button id="bot2">Cerrar Sesion</button></a>

                <div id="fot">
                    <div class="text-overlay">
                        <div class="tit">
                            <h3 style="color: #ffffff;">VIAJA POR CENTRO AMERICA CON NOSOTROS</h3>
                        </div>
                        <p>Viaja seguro, rapido y confiable por toda centro america</p>
                    </div>
                    <div class="image-container">
                        <img src="img/guatemala.jpeg" alt="Imagen gua">
                        <img src="img/honduras.jpeg" alt="Imagen hon">
                        <img src="img/elsalvador.jpeg" alt="Imagen es">
                        <img src="img/nicaragua.jpeg" alt="Imagen nic">
                        <img src="img/costarica.jpeg" alt="Imagen cos">
                        <img src="img/panama.jpeg" alt="Imagen pan">
                    </div>
                    <p>Viaja por Guatemala, Honduras, El Salvador, Nicaragua, Costa Rica y Panama</p>
                </div>

                <div id="fot2">
                    <div class="text-overlay">
                        <div class="tit">
                            <h3 style="color: #ffffff;">PUEDES VER NUESTROS REGISTROS DE VUELO</h3>
                        </div>
                    </div>
                </div>

                <div id="fot3">
                    <div class="text-overlay">
                        <div class="tit">
                            <h3 style="color: #ffffff;">RESERVA TU VUELO</h3>
                        </div>
                        <p>Puedes encontrar diferentes vuelos en horarios accesibles para ti</p>
                    </div>
                    <img id="gifavi" src="img/avion.gif" alt="Imagen avi">
                    <p>Ingresa los datos de tu vuelo</p>
                    <div id="regavi">
                        <div>
                            <p>
                                Ciudad de origen:
                            </p>
                            <select name="pais" id="pais">
                                <option value="1">Honduras</option>
                                <option value="2">Guatemala</option>
                                <option value="3">El Salvador</option>
                                <option value="4">Nicaragua</option>
                                <option value="5">Costa Rica</option>
                                <option value="6">Panama</option>
                            </select>
                        </div>
                        <br>
                        <div>
                            <p>
                                Ciudad destino:
                            </p>
                            <select name="pais" id="pais">
                                <option value="1">Honduras</option>
                                <option value="2">Guatemala</option>
                                <option value="3">El Salvador</option>
                                <option value="4">Nicaragua</option>
                                <option value="5">Costa Rica</option>
                                <option value="6">Panama</option>
                            </select>
                        </div>
                        <br>
                        <!-- <div>
                            <p>
                                Tipo de Vuelo:
                            </p>
                            <select name="tipo" id="tipo">
                                <option value="1">Ida</option>
                                <option value="2">Ida y vuelta</option>
                                <option value="3">Escalado</option>
                            </select>
                        </div>
                        <br> -->
                        <a href="tabla"><button id="bot2">Buscar</button></a>
                    </div>
                </div>

                <div id="contacto">
                    <div class="tit">
                        <h3 style="color: #000000;">CONTACTANOS</h3>
                    </div>
    
                    <div id="cont">
                        <button class="bot" id="face"><i class="fa-brands fa-facebook"></i></button>
                        <button class="bot" id="wha"><i class="fa-brands fa-whatsapp"></i></button>
                        <button class="bot" id="inst"><i class="fa-brands fa-instagram"></i></button>
                        <button class="bot" id="mail"><i class="fa-solid fa-envelope"></i></button>
                    </div>
                </div>

            </div>

        </div>

    </div>




    <script>
        setTimeout(function() {
            var mensaje = document.getElementById("pantallapri");
            mensaje.style.opacity = "1"; // Mostrar el mensaje
        }, 100); 
    </script>
    <script src="{{ asset('js/controlador.js') }}"></script>

</body>
</html>