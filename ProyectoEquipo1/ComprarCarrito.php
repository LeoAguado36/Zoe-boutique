<?php
$datos = array();
$idcarrito=$_POST["Carrito"];

$servername = "localhost";
$database = "tienda";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";

$sql="update carrito set activo=0 where id_Carrito=".$idcarrito." and activo=1";
if (mysqli_query($conn, $sql)) {
      echo "carrito actualizado";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>