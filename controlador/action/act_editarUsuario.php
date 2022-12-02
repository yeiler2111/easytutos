<?php
    
    session_start();
    
    require_once (__DIR__.'/../mdb/mdbUsuario.php');
    require_once (__DIR__.'/../../modelo/entidad/Usuario.php');

    if(isset($_POST['submit'])){
        $id = $_SESSION['ID_USUARIO'];
        $nombre = $_POST['nombre'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        $pp=$_FILES['pp'];

        $tmp=$pp['tmp_name'];
        $des="../../vista/img/image";
        $imgn=$pp['name'];
        $imgt=$pp['type'];
        if((strpos($imgt, "gif") || strpos($imgt, "jpeg")||strpos($imgt, "jpg")||strpos($imgt, "png"))){
            $destino=$des . '/' . $imgn;

            if($password===$cpassword){
                $usuario = new Usuario($id, $nombre, $username, $password,$destino);
                if(move_uploaded_file($tmp, $destino)){
                    if($usuario){
                        modificarUsuario($usuario);
                        header("Location: ../../vista/perfil.php"); 
                        
                    }else{
                        
                    }
                    return true;
                }
            }else{
                echo"<script>Swal.fire(
                    'Las contraseñas no coinciden!',
                    'intentalo de nuevo!',
                    'error'
                )</script>";
            }
        }
    }
?>    