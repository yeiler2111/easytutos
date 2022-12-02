<?php 

session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="css/editperfil.css">
</head>
<body>
    <div id="edit">
        <div id="content">
            <h2 id="namepage">Perfil</h2>
            <form action="../controlador/action/act_editarUsuario.php" method="post" enctype="multipart/form-data">

                <div class="inputbox">
                    
                    <input type="text" id="nombre" name="nombre" placeholder="Nombre"  value="<?php echo $_SESSION['NOMBRE_COMPLETO']; ?>">
                </div>
                <div class="inputbox">
                    
                    <input type="text" id="username" name="username" placeholder="Correo" value="<?php echo $_SESSION['NOMBRE_USUARIO']; ?>">
                </div>
                <div class="inputbox">
                    
                    <input type="password" id="password" name="password" placeholder="Contraseña">
                </div>

                <div class="inputbox">
                    
                    <input type="password" id="cpassword" name="cpassword"placeholder="Confirmar Contraseña">
                </div>
                <div class="inputbox" id="bt">
                    <button type="submit" name="submit" class="btn"><strong><h2>Modificar Perfil</h2></strong> </button>
                </div>
                <div class="inputbox" id="ft">
                    <span>Foto</span>
                    <input type="file" id="foto" name="pp">
                </div>
                        
            </form>
        </div>
    </div>
</body>
</html>