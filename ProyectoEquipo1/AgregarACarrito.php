<?php
$datos = array();
$idProducto=$_POST["idProducto"];
$idUsuario=$_POST["idUsuario"];

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

$sql="select id_carrito from carrito where id=".$idUsuario." and activo=1";
$conn->real_query($sql);
$resultado = $conn->use_result();
$existecarrito=0;
while ($fila = $resultado->fetch_assoc()) {
    $existecarrito=1;
    echo " existe carrito = " . $fila['id_carrito'] . "\n";
}
if($existecarrito==0){
    $sql = "insert into carrito (id,activo) values('".$idUsuario."',1);";
    if (mysqli_query($conn, $sql)) {
          echo "nuevo carrito creado";
    } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
$sql="select id_carrito from carrito where id=".$idUsuario." and activo=1";
$conn->real_query($sql);
$resultado = $conn->use_result();
$idcarrito=0;
while ($fila = $resultado->fetch_assoc()) {
    $idcarrito=$fila['id_carrito'];
}

//inserta registro del carrito.
$sql = "insert into registro_carrito (id,id_carrito) values(".$idProducto.",".$idcarrito.");";
if (mysqli_query($conn, $sql)) {
      echo "producto agregado";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>