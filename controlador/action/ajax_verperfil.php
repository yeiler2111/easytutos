<?php
 session_start();
 require_once (__DIR__.'/../mdb/mdbUsuario.php');
 $usuario = buscarUsuarioPorId($_SESSION['ID_USUARIO']);
 $respuesta = [
    'id' => $usuario->getId(),
    'nombre' => $usuario->getNombre(),
    'username' => $usuario->getUsername()
];
 echo json_encode($respuesta);  //retorna el vector con la info 
