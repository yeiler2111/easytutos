<?php

session_start();
    
require_once (__DIR__.'/../mdb/mdbUsuario.php');


borrarUsuario($_SESSION['ID_USUARIO']);

header("Location: ../../vista/login.php");
