<?php
//    require 'Connection.php';
?>
<html>
    <head>
        <title>ZOE BOUTIQUE</title>
    </head>
    <style>
        a{
            display:inline-block;
            width: 100px; ;
            flex-direction:row ;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: 700;
            background-color: black;
            border-radius: 10px;
            padding: 30px 60px;
            margin: 50px 120px ;
            color: rgb(255, 255, 255);
            text-decoration: none;
        }
        a:hover{
            background-color: transparent;
            border: 2px solid rgb(255, 255, 255);
            color: black;
        }
    </style>
    <style>
        body{
            background-color: rgb(255, 255, 255);
            color: rgb(0, 0, 0);
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size:larger;
        }
        .container{
            width: 33%;
            padding: 5px 100px;
            
            margin: 0 auto;
            text-align: center;
        }
        form{
            margin-top: 30px;
        }
        label {
            display: block;
            margin-bottom: 5px;
          

        }
        input, textarea{
            width: 100%;
            padding: 10px;
            margin-bottom:5px ;
            box-sizing: border-box;
        }
        form.elegante input {
         padding: 5em;
        }
  
        
    </style>
    <body>
        
    <center>
        <div class="container">
            <form action="Registrate.php" method="POST" >
              <fieldset>
                 <legend><font size="7" style="font-family: 'Courier New', Courier, monospace;" >CREAR CUENTA</font></legend>
                <label for="Nombre" style="font-family: cursive;">NOMBRE:</label>
                <input type="text"  name="Nombre"  required>
                <label for="Direccion"  style="font-family: cursive">DIRECCIÓN</label>
                <input type="text"  name="Direccion"  required>
                <label for="Correo" style="font-family: cursive">CORREO ELECTRONICO</label>
                <input type="text"  name="Correo"  required>
                <label for="contraseña" style="font-family: cursive">CONTRASEÑA</label>
                <input type="text"  name="Contrasena"  required>
                <center>
                <input type="submit" name="Reg" value="CREAR CUENTA">
    </center>

              </fieldset>
            </form>
            <?php
            if(isset($_POST['Reg'])){
                $Nombre=$_POST['Nombre'];
                $Direccion=$_POST['Direccion'];
                $Correo=$_POST['Correo'];
                $Contrasena=$_POST['Contrasena'];
            }
            ?>
        </div>
        
        </center>
    </body>
</html>