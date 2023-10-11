<?php 
    $server = "localhost";
    $user = "root";
    $pass = "";
    $bd="signotech";

   if( $conn= mysqli_connect($server, $user,$pass,$bd)){
    //echo "Conectado!";
   }else{
    echo"erro";
   }


?>