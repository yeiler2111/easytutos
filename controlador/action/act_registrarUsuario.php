<?php
   
    session_start();
    
    require_once (__DIR__."/../mdb/mdbUsuario.php");
    require_once (__DIR__."/../../modelo/entidad/Usuario.php");
        /*
        if(isset($_POST['administrador'])) {
            $usuario = new Usuario(NULL, $nombre, $username, $password);
            insertarUsuario($usuario);
            header("Location: ../../vista/administradorUsuarios.php");
        }else{
            $usuario = new Usuario(NULL, $nombre, $username, $password, 0);
            $registro = insertarUsuario($usuario);
            if($registro)
                header("Location: ../../vista/login.php?msg=Se realizo el registro satisfactoriamente");
            else
                header("Location: ../../vista/login.php?msg=No se pudo realizar el registro");



                <button class="btn btn-lg btn-primary btn-block" id="reg" type="submit">
                    <h5>Registrar</h5>
                </button>
        }
        */
        if(isset($_POST['Registrar'])){
            $nombre = $_POST['nombre'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            /*$usuario = new Usuario(NULL, $nombre, $username, $password);
            $registro = insertarUsuario($usuario);
            $usuario = insertarUsuario(0,$nombre,$username, $password);
            */
            $usuario = new Usuario(NULL, $nombre, $username, $password,null);
            $registro = insertarUsuario($usuario);
            if($registro)
                header("Location: ../../vista/login.php?msg=Se realizo el registro satisfactoriamente");
            else
                header("Location: ../../vista/login.php?msg=No se pudo realizar el registro");   
        }
?> 

        
        

