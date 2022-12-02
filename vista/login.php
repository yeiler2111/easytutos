<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="../js/script.js" type="text/javascript" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
    <div id="marca">
        <div id="imagen"><img src="img/logod.png" alt="Logo pai"></div>
    </div>
  
    <div id="ventanaRegistro">
        
      <form name="formulario" action="../controlador/action/act_login.php" method="post" >
            <div id="datos">
            <h1 class="h3 mb-3 font-weight-normal">Logeate!</h1>
                <label>
                    <input placeholder="Correo Institucional" type="text" name="username" id="CorreoInstitucional">
                </label>
                <label>
                    <input placeholder="Contraseña" type="password" name="password" id="Contrasena">
                </label>
                <input type="submit" id="log" name="enviar" value="enviar">
                <input type="button" class="btn btn-lg btn-secondary btn-block" id="reg" onclick="location.href = 'registrar.php'" value="Registrar">
               
                <a href="#">¿Olvidaste tu Contraseña?</a>
            </div>
       </form>
    </div> 
</body>
</html>