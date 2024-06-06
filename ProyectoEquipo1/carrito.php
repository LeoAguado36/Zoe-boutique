<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZOE BOUTIQUE</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
</head>
<body>
<div class="container">
    <?php
        $servername = "localhost";
        $database = "tienda";
        $username = "root";
        $password = "";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $database);
        $conn2 = mysqli_connect($servername, $username, $password, $database);
        // Check connection
        if (!$conn) {
              die("Connection failed: " . mysqli_connect_error());
        }
        $idUsuario=1;
        $sql="select id_carrito from carrito where id=".$idUsuario." and activo=1";
        $conn->real_query($sql);
        $resultado = $conn->use_result();
        $existecarrito=0;
        $idcarrito=0;
        while ($fila = $resultado->fetch_assoc()) {
            $existecarrito=1;
            $idcarrito=$fila['id_carrito'];
        }
        if($existecarrito==0){
            echo "<big><h2>Aún no existe carrito</h2></big>";
        }else{
            $total=0;
            $sql="select id from registro_carrito where id_carrito=".$idcarrito;
            $conn->real_query($sql);
            $resultado = $conn->use_result();
            echo "<div class='container'>";
            while ($fila = $resultado->fetch_assoc()) {
                //echo " existe carrito = " . $fila['id'] . "\n";
                $sql2="select id,nombre,precio from productos where id=". $fila['id'];
                $conn2->real_query($sql2);
                $resultado2 = $conn2->use_result();
                while ($fila2 = $resultado2->fetch_assoc()) {
                         echo "<div class='row'>";
                         echo "<div class='col'>";
                         echo $fila2['nombre'];
                         echo "</div>";
                         echo "<div class='col'>";
                         echo $fila2['precio'];
                         echo "</div>";
                         echo "</div>";
                         $total=$total+$fila2['precio'];
                }
            } 
            echo "</div>";
            echo "<big><h1>El total a pagar es:" .$total."</h1></big>";
            echo "<button class='PagarCarrito' id='boton_pagar' name=".$idcarrito.">Pagar</button>";
        }
    ?>
</div>
<script>
        $("#boton_pagar").on("click",function(){
            var idcarrito=$(this).attr("name");
            $.ajax({
                    type: 'POST', //aqui puede ser igual get
                    url: 'ComprarCarrito.php',//aqui va tu direccion donde esta tu funcion php
                    data: { Carrito: idcarrito},//aqui tus datos
                    success: function (json) {
                        alert("Carrito pagado correctamente");
                        location.href ="ropa1.html";
                    },
                    error: function (data) {
                        console.log("error" + data);
                    }
                });
        });
</script>
</body>
</html>