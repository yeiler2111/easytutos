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
    <link rel="stylesheet" href="css/admin.css">
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
                        <a href="../controlador/action/act_logout.php" class="nav-link">cerrar sesion</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div id="grid">
            <p id="moni">Hola Admin!</p>
            <div id="datosusuario">
                <table class="table" id="usuariosRegistrados">
                    <thead>
                        <tr>
                           <th scope="col">id</th>
                           <th scope="col">Nombre</th>
                           <th scope="col">Usuario</th>
                       </tr>
                    </thead>
                    <tbody>
        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="js/librerias/jquery-3.3.1.min.js"></script>
	<script src="js/librerias/bootstrap.bundle.min.js"></script>
	<script src="js/librerias/sweetalert2.js"></script>
	<script src="js/logica/administradorUsuarios.js"></script> 
</body>