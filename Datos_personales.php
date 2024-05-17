<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="">
</head>
<body>

    <form method="post" autocomplete="off">
        <h1>Mis Datos</h1>

        <div class="input-group">

             <div class="input-container">
                <input type="text" name="name" placeholder="nombre_completo">
            </div>

            <div class="input-container">
                <input type="text" name="id" placeholder="identificación">
            </div>

            <div class="input-container">
                <input type="domicilio" name="domicilio" placeholder="domicilio">
            </div>

            <div class="input-container">
                <input type="email" name="email" placeholder="email">
            </div>

            <div class="input-container">
                <input type="tel" name="phone" placeholder="telefono">
            </div>

            <input type="submit" name="send" class="btn" value="Enviar">

        </div>
    </form>    

    <!-- se añade include para el formulario de registro -->
    <?php
    include("send_datos_personales.php");
    ?>





        
    
    
</body>
</html>