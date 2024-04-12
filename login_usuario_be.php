<?php

session_start();

//incluimos el archivo de conexion hacia nuestra base de datos
include 'conexion.php';

$email = $_POST['email'];
$password = $_POST['pass'];

// Se crea la variable validar login mediante la conexion a la base datos
$validar_login = mysqli_query($conex, " SELECT *  FROM datos WHERE email='$email' and contraseña='$password'");

if(mysqli_num_rows($validar_login) > 0) {

//Creamos la variable de sesion y pueda acceder a la pagina    
    $_SESSION['usuario'] = $email;
    header("location: index usuario.php");
    exit;
}else{
    echo ' 
        <script>
            alert("Usuario no existe, por favor verifique los datos introducidos");
            window.location = "login.php";
        </script>
    ';
    exit;
}
?>