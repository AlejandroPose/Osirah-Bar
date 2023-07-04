<?php
session_name('osirahbar');
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Osirah Bar</title>
    <!-- ICONO EN PESTAÑA -->
    <link rel="shortcut icon" href="../imagenes/logo.png">
    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="../librerias/fontawesome/css/all.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="../estilos/generales.css">
    <link rel="stylesheet" href="../estilos/menu.css">
    <link rel="stylesheet" href="../estilos/carta.css">
    <link rel="stylesheet" href="../estilos/btn-top.css">
    <link rel="stylesheet" href="../estilos/footer.css">
</head>

<body>

    <!-- BOTON IR ARRIBA -->
    <?php
    include_once "btnTop.php";
    ?>

    <!-- HEADER -->
    <?php
    include_once "header.php";
    ?>

    <!-- CARTA -->
    <section id="carta">

        <div class="carta-titulos">
            <h2 class="subtitulo">Los mejores productos del mundo</h2>
            <h1 class="titulo">Conoce nuestra carta</h1>
        </div>

        <div class="carta-container">

            <div class="producto p1">
                <img src="../imagenes/slider/whiskyALasRocas.png" alt="Whisky En Las Rocas">
                <div class="producto-texto">
                    <p class="titulo-producto">Whisky en las rocas</p>
                    <p class="texto-producto">Ingredientes:<br>1) Hielo.<br>2) Whisky.</p>
                </div>
            </div>

            <div class="producto p2">
                <img src="../imagenes/slider/negroni.png" alt="Negroni">
                <div class="producto-texto">
                    <p class="titulo-producto">Negroni</p>
                    <p class="texto-producto">Ingredientes:<br>1) Hielo.<br>2) Campari.<br>3) Ginebra.<br>4) Vermú Rojo.<br>5) Rodaja de Naranja.</p>
                </div>
            </div>

            <div class="producto p3">
                <img src="../imagenes/slider/frenchMojito.png" alt="French Mojito">
                <div class="producto-texto">
                    <p class="titulo-producto">French Mojito</p>
                    <p class="texto-producto">Ingredientes:<br>1) Hielo.<br>2) Champaña.<br>3) Jugo de Limón.<br>4) Jarabe de Azúcar.<br>5) Agua con Gas.<br>6) Hojas de Menta.</p>
                </div>
            </div>

            <div class="producto p4">
                <img src="../imagenes/slider/daiquiri.png" alt="Daiquiri">
                <div class="producto-texto">
                    <p class="titulo-producto">Daiquiri</p>
                    <p class="texto-producto">Ingredientes:<br>1) Hielo.<br>2) Azúcar.<br>3) Zumo de Lima.<br>4) Ron Blanco.</p>
                </div>
            </div>

            <div class="producto p5">
                <img src="../imagenes/slider/bloodyMary.png" alt="Bloody Mary">
                <div class="producto-texto">
                    <p class="titulo-producto">Bloody Mary</p>
                    <p class="texto-producto">Ingredientes:<br>1) Hielo.<br>2) Vodka.<br>3) Caldo de Carne.<br>4) Jugo de Limón.<br>5) Zumo de Tomate.<br>6) Tabasco.<br>7) Sal de Apio.</p>
                </div>
            </div>

        </div>

    </section>

    <!-- FOOTER -->
    <?php
    include_once "footer.php";
    ?>

    <script src="../funciones/menu.js"></script>
    <script src="../funciones/btn-top.js"></script>

</body>

</html>