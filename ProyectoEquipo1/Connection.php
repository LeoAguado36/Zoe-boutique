<?php
$user="root";
$pass="";
$host="127.0.0.1";
$datab="tienda";
$connection=mysqli_connect($host,$user,$pass);
$db=mysqli_select_db($connection,$datab);

if(!$connection){
    echo"No se ha podido conectar con el servidor";
    mysql_error();
}
else{
    echo"Hemos conectado al servidor <br>";
}
if(!$db){
    echo"No se a podido conectar la base de datos";
}else{
    echo"La base de datos;$datab,fue encontrada";
}

?>