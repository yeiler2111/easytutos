<?php
        session_start();
        require_once (__DIR__."/../mdb/mdbUsuario.php");
       
	if(isset($_POST['enviar'])){
		$errMsg = '';
		//username and password sent from Form
		$username = $_POST['username'];
		$password = $_POST['password'];
                
               $usuario = autenticarUsuario($username, $password);
                

		if($usuario != null){ // Puede iniciar sesión
                    $_SESSION['ID_USUARIO'] = $usuario->getId();
                    $_SESSION['NOMBRE_USUARIO'] = $usuario->getUsername();
                    $_SESSION['NOMBRE_COMPLETO'] = $usuario->getNombre();
                    $_SESSION['FOTO_P']=$usuario->getPp();

                   header("Location: ../../vista/index.php");
		}else{ // No puede iniciar sesión
                    $errMsg .= 'Username and Password are not found';
                    header("Location: ../../vista/login.php");
		}
	}
        
        
        // No puede iniciar sesión
      // header("Location: ../../vista/login.php");
        
?>
