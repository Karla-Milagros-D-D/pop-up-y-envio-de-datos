<!--Pagina Resultados-->

<!DOCTYPE html>
<html>
    <head>
        <title>¡resultados de datos!</title>
         <link rel="stylesheet" href="style.css">
    </head>

    <body>

        <div class="dive2">

        <h1> RESULTADOS</h1>

        <!--imagen k.m.d.d-->
       <div style="text-align: center;">
        <img src="Cat.jpe"

        alt="Ejemplo" 
        width="200"
        height="200"
        >

        <!--codigo php-->
        </div>

        <?php
        $nombre = $_POST["nombre"];
        $edad = $_POST["edad"];
        $ciudad = $_POST["ciudad"];
        $fecha = $_POST["fecha"];
        $pasatiempos = $_POST["pasatiempos"];

?>

<p class="datos">  Nombre: <?php echo $nombre; ?></p>

<p class="datos">Edad: <?php echo $edad; ?></p>

<p class="datos">Ciudad donde vives: <?php echo $ciudad; ?></p>

<p class="datos">Fecha de nacimiento: <?php echo $fecha; ?></p>

<p class="datos">Pasatiempos favoritos: <?php echo $pasatiempos; ?></p>
<!--boton debajo de "bien hecho"-->


        <h2>¡BIEN HECHO!</h2>
        <div id="popUpOverlay"></div>
        <div id="popUpBox">
        <div id="box">
            <i class="fas fa-question-circle fa-5x"></i>
            <h1>¿volver a ingresar datos?</h1>
<!---->
            <div id="closeModal">

            </div>
        </div> 
    </div>
    <center>
        <!--conexion con app.js-->
        <script src="app.js"></script>
    <button onclick= "Alert.render ('You look very pretty today.')" class="btn">
        ¡Volver a Ingresar!
     </button>
    
</center>
</div>

    </body>
</html>