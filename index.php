<!-- Este archivo es la pagina de inicio principal del proyectoo -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>despegable</title>
    <link rel="stylesheet" href="Style.css"> 
</head>
<body>
        <div class="head">

            <div class="SaludOk">
                <a href="#">SaludOk</a>
            </div>  

            <input type="checkbox" id="toogle">
            <label for="toogle"></label>

            <nav class="navbar">

                <ul>
                    <li><a href="#">Inicio</a>
                    <!-- se realiza la conexion con login y index 2 que es el formulario de registro -->
                        <ul>
                            <li><a href="Login.php">Iniciar sesion</a></li>
                            <li><a href="index2.php">Registrarse</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Nosotros</a>
                        <ul>
                            <li><a href="#">Quienes somos</a></li>
                            <!-- enlazamos en archivo Misionphp con la mision -->
                            <li><a href="Mision.php">Mision </a></li>
                            <li><a href="#">Vision </a></li>
                            <li><a href="#">Trabaje con nosotros </a></li>
                        </ul>
                    </li>
                    <li><a href="#">Contacto</a>
                        <ul>
                            <li><a href="#">Contactenos</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Servicios</a>
                        <ul>
                            <li><a href="#">Citas medicas</a></li>
                            <li><a href="#">Autorizaciones</a></li>
                            <li><a href="#">Medicamentos</a></li>

                        </ul>
                    </li>
                    
                    <li><a href="#">Precio</a>
                        <ul>
                            <li><a href="#">Tarifas</a></li>
                        </ul>
                    </li>
                </ul>
            </nav> 

            
        </div> 

        <header class="content header">
            <h2 class="title">Inicio</h2>
            <p>
            En SaludOk trabajamos constantemente 
            para que todos nuestros usuarios puedan acceder a todos nuestros servicios y faciliten
            la aprobacion en tramites de autorizaciones, citas Medicas
            y entrega de medicamentos en general.
            </p>
            <a href="#" class="btn">Saber mas</a>
        </header>

        <section class="content sau"> 
            <h2 class="title">SERVICIOS</h2>
            <p>
             Nuestros servicios integran una alta calidad y experiencia al usuario, la cual nos permitimos 
             gestionar para reducir los tiempos de espera en aprobaciones, solicitudes, entregas y tramites que generalmente son
             de uso inmediato para el paciente.
    
            </p>

            <div class="box-container">

                <div class="box">
                    <i class="fab fa-apple"></i>
                    <h3>Citas Medicas</h3>
                    <p>Asignacion de citas medicas y otras especialidades</p>
                </div>
    
                <div class="box">
                    <i class="fab fa-android"></i>
                    <h3>Autorizaciones</h3>
                    <p>Gestionar autorizaciones medicas y examenes</p>
                </div>
    
                <div class="box">
                    <i class="fab fa-angular"></i>
                    <h3>Medicamentos</h3>
                    <p>Solicita tus medicamentos en un solo clic</p>
                </div>
    
            </div>  

        </section>

        <section class="content price">
    
            <article class="contain">
    
                <h2 class="title" >Precio</h2>
                <p>Registrate ahora y accede sin costo alguno a un primer servicio, conoce aqui nuestras 
                    tarifas de servicios.
                </p>
                <a href="#" class="btn">Saber precio</a>
    
            </article>
    
    
        </section>

        <section class="content about">
            <h2 class="title">Quienes somos</h2>
            <p>Especialistas en soluciones medicas y atencion al usuario. Eficaces en ofrecer 
                a cabo tu mejoramiento en plan de vida y lo mas importante el tiempo, mas alla de todo eso, tu equipo.
            </p>
            <div class="box-container2">

                <div class="box">
                    <img src="img/cristian.png" alt="">
                    <h3>Cristian</h3>
                    <p>Manager</p>
                    <div class="stars">
                        <i class="fas fa star"></i>
                        <i class="fas fa star"></i>
                        <i class="fas fa star"></i>
                        <i class="fas fa star"></i>
                    </div>
    
                </div>

                <div class="box">
                    <img src="img/Guillermo.png" alt="">
                    <h3>Guillermo</h3>
                    <p>Especialista en atencion al cliente</p>
                    <div class="stars">
                        <i class="fas fa star"></i>
                        <i class="fas fa star"></i>
                        <i class="fas fa star"></i>
                        <i class="fas fa star"></i>
                    </div>
    
                </div>

                <div class="box">
                    <img src="img/pic3.jpg" alt="">
                    <h3>David</h3>
                    <p>Soluciones inmediatas</p>
                    <div class="stars">
                        <i class="fas fa star"></i>
                        <i class="fas fa star"></i>
                        <i class="fas fa star"></i>
                        <i class="fas fa star"></i>
                    </div>
    
                </div>
    
            </div>
        
        </section>

        <section class="content contact">
            <h2 class="title">Contacto</h2>

            <div class="footer-section">

                <div>
                    <p>5454754</p>
                </div>
    
                <div class="f-enlaces">
                    <a href="#">Inicio</a>
                    <a href="#">Nosotros</a>
                    <a href="#">Contacto</a>
                    <a href="#">Servicios</a>
                    <a href="#">Precio</a>
                    <a href="#">Canales de atencion</a>
                </div>
    
                <div class="f-enlaces">
                    <a href="#"></a>
                    
                </div>
    
                <figure>
                    <img src="img/mapa.png" height="220px" width="100%"    alt="mapa">
                </figure>
    
            </div>
    
        </section>       
</body>
</html>