<?php

    $host = "127.0.0.1";
    $user = "root";
    $password = "";
    $db = "repositorioweb";

    $conexion = mysqli_connect($host,$user,$password,$db);

    if(!$conexion)
    {
        echo "error en la conexion";
        //return "CONECTADO";
    }

?>  
