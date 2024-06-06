
<?php
$user="root";
$pass="";
$host="127.0.0.1";
$datab="tienda";
$connection=mysqli_connect($host,$user,$pass);
$db=mysqli_select_db($connection,$datab);

$Nombre=$_POST['Nombre'];
$Direccion=$_POST['Direccion'];
$Correo=$_POST['Correo'];
$Contrasena=$_POST['Contrasena'];
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
   
    $servername = "localhost"; 
    $user = "root"; 
    $pass = ""; 
    $datab = "amigos401"; 
    $conn = new mysqli($servername, $user, $pass, $datab); 
    if ($connection->connect_error) { 
        die("Conexión fallida: " . $conn->connect_error); } 

$sql = "INSERT INTO usuario (Nombre, Direccion, Correo, Contrasena) VALUES ('$Nombre', '$Direccion', '$Correo', '$Contrasena')";
if (mysqli_query($connection, $sql)) {
      ?>
      <center>
        <br><br><br>
        <p>Te has registrado a Zoe Bouttique!!!</p>
            <form action=ropa1.html>
        <input type="submit" name="Reg" value="Send">
</form>
</center>
<?php
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}
mysqli_close($connection);
}
?>
