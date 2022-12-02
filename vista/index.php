<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyTutos</title>
    <link rel="stylesheet" href="css/styles2.css">
    <script src="../../js/script2.js" type="text/javascript" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alkalami&family=Noto+Sans:wght@400;600&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div id="cuerpo">
        <div id="marca">
            <nav id="navegacion">
                <div id="logo">
                    <a href="#"><img src="img/logod.png" alt="Logo pai"></a>
                </div>
                <ul class="menu">
                <li class="menuitem">
                        <h3>bienvenido <?php echo $_SESSION['NOMBRE_COMPLETO'];  ?></h3>
                    </li>
                    <li class="menuitem">
                        <a href="#" class="nav-link">Inicio</a>
                    </li>
                    <li class="menuitem">
                        <a href="#monitores" class="nav-link">Monitores</a>
                    </li>
                    <li class="menuitem">
                        <a href="#eventos" class="nav-link">Eventos</a>
                    </li>
                    <li class="menuitem">
                        <a href="#" class="nav-link">Cuenta</a>
                    </li>
                    <li class="menuitem">
                        <a href="perfil.php" class="nav-link">Ver perfil</a>
                    </li>
                    <li class="menuitem">
                        <a href="../controlador/action/act_logout.php" class="nav-link">cerrar sesion</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div id="grid">
            <div id="fondos">
            </div>
            <div id="monitores">
                <div id="moni">
                  <p id="moni">Monitores</p>
                </div>
                
                <div id="imgmoni">
                    <div class="monitor">
                        <img src="img/monitor.jpg" alt="imgmoni">
                        <ul id="lista">
                            <li class="listaItem">
                                <a href="#" class="nombre">Monitor 1</a>
                            </li>
                            <li class="listaItem">
                                <p class="aux">Asignaturas: <a href="#" class="asignaturas">Asiganatura 1</a></p>
                            </li>
                        </ul>
                    </div>
                    <div class="monitor">
                        <img src="img/monitor.jpg" alt="imgmoni">
                        <ul id="lista">
                            <li class="listaItem">
                                <a href="#" class="nombre">Monitor 2</a>
                            </li>
                            <li class="listaItem">
                                <p class="aux">Asignaturas: <a href="#" class="asignaturas">Asiganatura 2</a></p>
                            </li>
                        </ul>
                    </div>
                    <div class="monitor">
                        <img src="img/monitor.jpg" alt="imgmoni">
                        <ul id="lista">
                            <li class="listaItem">
                                <a href="#" class="nombre">Monitor 3</a>
                            </li>
                            <li class="listaItem">
                                <p class="aux">Asignaturas: <a href="#" class="asignaturas">Asiganatura 3</a></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="eventos">
                <p id="events">Próximos Eventos</p>
                <div class="horario">
                    <div class="num">1</div>
                    <div class="info">
                        <a href="#" class="date">dia/mes: hora</a>
                        <p class="aux2">Tema: <a href="#" class="tema">TemaReunion</a></p>
                        <p>Organizador: <a href="#" class="organizador">NombreMonitor</a></p>
                    </div>
                </div>
                <div class="horario">
                    <div class="num">2</div>
                    <div class="info">
                        <a href="#" class="date">dia/mes: hora</a>
                        <p class="aux2">Tema: <a href="#" class="tema">TemaReunion</a></p>
                        <p>Organizador: <a href="#" class="organizador">NombreMonitor</a></p>
                    </div>
                </div>
                <div class="horario">
                    <div class="num">3</div>
                    <div class="info">
                        <a href="#" class="date">dia/mes: hora</a>
                        <p class="aux2">Tema: <a href="#" class="tema">TemaReunion</a></p>
                        <p>Organizador: <a href="#" class="organizador">NombreMonitor</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    
</body>
</html>