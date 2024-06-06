<?php
session_start();
$user="root";
$pass="";
$host="127.0.0.1";
$datab="tienda";
$connection=mysqli_connect($host,$user,$pass);
$db=mysqli_select_db($connection,$datab);

$Nombre=$_POST['Nombre'];
$Contrasena=$_POST['Contrasena'];

$consulta = mysqli_query ($connection, "SELECT * FROM usuario WHERE Nombre = '$Nombre' AND Contrasena = '$Contrasena'");


if(!$consulta){

echo "Usuario no existe " . $nombre . " " . $password. " o hubo un error " ;
}
if($Nombre = mysqli_fetch_assoc($consulta)) {


    ?>
    <center>
      <h1>Bienvenido a Zoe Bouttique!!!
          <form action=ropa1.html>
      <input type="submit" name="Reg" value="Continuar">
</form>
</center>
<?php


} else {
    ?>
    <center>
      <h1>Usuario y/o Contraseña Incorrectos.. :c
          <form action=Iniciar.php>
      <input type="submit" name="Reg" value="Regresar">
</form>
</center>
<?php


}

?>