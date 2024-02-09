<?php

include("conexion.php");

if(isset($_POST['send'])) {

    if
       (($_POST['name']) >= 1 &&
        ($_POST['password']) >= 1 &&
        ($_POST['email']) >= 1 &&
        ($_POST['phone']) >= 1
    ) {
        $name = trim($_POST['name']);
        $password = trim($_POST['password']);
        $email = trim($_POST['email']);
        $phone = trim($_POST['phone']);
        $fecha = date("d/m/y");
        $consulta = "INSERT INTO datos(nombre, contraseña, email, telefono, fecha) VALUES ('$name','$password','$email','$phone','$fecha')";
        $resultado = mysqli_query($conex, $consulta);
        if ($resultado) {
            ?>
            <h3 class="ok">Tu registro se ha completado</h3>
        <?php    
        } else {
            ?>
            <h3 class="bad">Ocurrio un error</h3>
             <?php
        }
    } else {
        ?>
        <h3 class="bad">Llena todos los campos</h3>
         <?php   
    }
   
    
}    

?>


