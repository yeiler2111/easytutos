<?php
    session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi perfil</title>
    <link rel="stylesheet" href="css/perfil.css">
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
                        <a href="index.php" class="nav-link">Inicio</a>
                    </li>
                    <li class="menuitem">
                        <a href="#monitores" class="nav-link">Monitores</a>
                    </li>
                    <li class="menuitem">
                        <a href="#eventos" class="nav-link">Eventos</a>
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
            <div id="perfil">
                <p id="moni">PERFIL</p>
                
               <div id="datosusuario">
                 <form action=""id="dataform">
                    <div id="dataaux">
                        <label for=""><img src="<?php echo $_SESSION['FOTO_P']; ?>"  id="fotop"></label>
                        <label for="">
                            <strong>Nombre:
                            <?php
                                echo $_SESSION['NOMBRE_COMPLETO'];
                            ?>   
                            </strong></label>
                        <label for=""><strong> Correo:
                            <?php
                                echo $_SESSION['NOMBRE_USUARIO'];
                            ?>
                        </strong></label>
                    </div>
                 </form>
                 <button onclick="location.href = 'editPerfil.php'">Editar</button>
                 <button onclick="location.href = '../controlador/action/elim_usuario.php' ">Eliminar</button>


                 
                </div>
            </div>
        </div>
        
    </div> 
    <!--
        <div class="greed">
        <div id="marca">
            <nav id="navegacion">
                <div id="logo">
                    <a href="#"><img src="img/logod.png" alt="Logo pai"></a>
                </div>
                <ul class="menu">
                <li class="menuitem">
                        <h3 >bienvenido <?php /*echo $_SESSION['NOMBRE_COMPLETO'];  */?></h3>
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

            <div class="info_usuario">
         
        </div>

        <div>
        





        <?php

       /*
       echo  $_SESSION['ID_USUARIO'];
       echo $_SESSION['NOMBRE_USUARIO'];  
       echo $_SESSION['NOMBRE_COMPLETO'];
       */  
      
       ?>
       
        </div class="divicion_perfil">
            <div>
                <h1></h1>
            </div>
            

         </div>

       
    </div>
    -->
    
</body>
</html>