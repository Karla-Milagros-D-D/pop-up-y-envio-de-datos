<!DOCTYPE html>
 <html>

    <head>
        

        <script src="https://kit.fontawesome.com/a71707a89.js" crossorigin="anonymous"></script>
        

        <title>Pagina de Registro</title>
       
        <!--llamar a style.css-->
     <link rel="stylesheet" href="./style.css"/>
    </head>
    <body>
        <div class="dive">
            <h1> Captura de Datos Personales </h1>
            <br>

            <h2> Ingresa los Datos que se te piden </h2>
            <br>

        
    <form action="resultados.php" method="POST">

    <label class="etiqueta"> Nombre</label> 
    <input name="nombre">
    <br>


    <label class="etiqueta"> Edad</label>
    <input name="edad">
    <br>

    <label class="etiqueta"> Ciudad donde vives </label>
    <input name="ciudad">
    <br>


    <label class="etiqueta"> Fecha de nacimiento </label>
    <input type="date" name="fecha">
    <br>

    <label class="etiqueta"> Pasatiempos Favoritos </label>
    <input name="pasatiempos">
    <br>

    <!-- BOTON RESULTADOS -->

    <button type="submit">¡Ingresamos Datos!</button>

</form>

        
        <style>
            .etiqueta {
                font-family: 'Courier New', Courier, monospace;
                font-size: large;
                color: rgb(75, 91, 238);
            }
        </style>

        </div>
    </body>
</html>
