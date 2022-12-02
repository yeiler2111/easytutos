<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto</title>
    <link rel="stylesheet" href="css/reg.css">
    <script src="../js/script.js" type="text/javascript" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
    <div id="marca">
       <div id="imagen"><img src="img/logod.png" alt="Logo pai"></div>
    </div>
    <div id="ventanaRegistro">
        <form class="form-signin" method="post" action="../controlador/action/act_registrarUsuario.php">
            <div id="datos">
                <h1 class="h3 mb-3 font-weight-normal">Registrate!</h1>
                <label for="nombre" class="sr-only">
                    <input name="nombre" type="text" id="nombre" class="form-control" placeholder="Nombre" autofocus>
                </label>
                
                <label for="username" class="sr-only">
                    <input name="username" type="email" id="username" class="form-control" placeholder="Correo" autofocus>
                </label>
                <label for="password" class="sr-only">
                    <input name="password" type="password" id="password" class="form-control" placeholder="Contraseña" >
                </label>
            
                <div class="checkbox mb-3">
                </div>
                <input type="submit" id="reg" name="Registrar" value="Registrar">
                <input type="button" class="btn btn-lg btn-secondary btn-block" id="ini" onclick="location.href = 'login.php'" value="Iniciar Sesión">	

            </div>
        </form>
    </div>
</body>
</html>