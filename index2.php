<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="formulario.css">
</head>
<body>

    <form method="post" autocomplete="off">
        <h1>Bienvenido</h1>

        <div class="input-group">

             <div class="input-container">
                <input type="text" name="name" placeholder="nombre">
            </div>

            <div class="input-container">
                <input type="password" name="password" placeholder="contraseña">
            </div>

            <div class="input-container">
                <input type="email" name="email" placeholder="email">
            </div>

            <div class="input-container">
                <input type="tel" name="phone" placeholder="telefono">
            </div>

            <a href="#">Terminos y Condiciones</a>
            <input type="submit" name="send" class="btn" value="Enviar">

        </div>
    </form>    

    <!-- se añade include para el formulario de registro -->
    <?php
    include("send.php");
    ?>





        
    
    
</body>
</html>