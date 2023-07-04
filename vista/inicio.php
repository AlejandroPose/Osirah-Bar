<?php
session_name('osirahbar');
session_start();
if (!isset($_SESSION['rol'])) {
    $_SESSION['rol'] = "";
}
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
    <link rel="stylesheet" href="..//estilos/menu.css">
    <link rel="stylesheet" href="../estilos/slider.css">
    <link rel="stylesheet" href="../estilos/servicios.css">
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

    <!-- SLIDER DE PRODUCTOS -->
    <section id="menu-productos">

        <div class="contenedor-principal">

            <button id="btn-izquierda"><span class="fas fa-angle-left"></span></button>

            <div class="slider">

                <div class="container-productos">

                    <div class="descripcion-productos">
                        <h2>Producto <b>Premium</b></h2>
                        <h1>Whisky en las Rocas</h1>
                        <p>El mejor whisky servido de la mejor manera posible.</p>
                        <button class="boton">¡Solicítalo aquí! <span class="fas fa-angle-right"></span></button>
                    </div>

                    <div class="imagen-productos">
                        <img src="../imagenes/slider/whiskyALasRocas.png" alt="Whisky En Las Rocas">
                    </div>

                </div>

                <div class="container-productos">

                    <div class="descripcion-productos">
                        <h2>Producto <b>Premium</b></h2>
                        <h1>Negroni</h1>
                        <p>Cóctel preparado a base de Gin, Campari y Vermúrojo.</p>
                        <button class="boton">¡Solicítalo aquí! <span class="fas fa-angle-right"></span></button>
                    </div>

                    <div class="imagen-productos">
                        <img src="../imagenes/slider/negroni.png" alt="Negroni">
                    </div>

                </div>

                <div class="container-productos">

                    <div class="descripcion-productos">
                        <h2>Producto <b>Estándar</b></h2>
                        <h1>French Mojito</h1>
                        <p>Mojito especial con su toque francés.</p>
                        <button class="boton">¡Solicítalo aquí! <span class="fas fa-angle-right"></span></button>
                    </div>

                    <div class="imagen-productos">
                        <img src="../imagenes/slider/frenchMojito.png" alt="French Mojito">
                    </div>

                </div>

                <div class="container-productos">

                    <div class="descripcion-productos">
                        <h2>Producto <b>Estándar</b></h2>
                        <h1>Daiquirí</h1>
                        <p>Cóctel escarchado hecho con ron blanco, jugo de limón o de lima y azúcar.</p>
                        <button class="boton">¡Solicítalo aquí! <span class="fas fa-angle-right"></span></button>
                    </div>

                    <div class="imagen-productos">
                        <img src="../imagenes/slider/daiquiri.png" alt="Daiquirí">
                    </div>

                </div>

                <div class="container-productos">

                    <div class="descripcion-productos">
                        <h2>Producto <b>Premium</b></h2>
                        <h1>Bloody Mary</h1>
                        <p>Bebida alcohólica hecha con vodka y zumo de tomate, ingrediente que le da ese color rojo característico.</p>
                        <button class="boton">¡Solicítalo aquí! <span class="fas fa-angle-right"></span></button>
                    </div>

                    <div class="imagen-productos">
                        <img src="../imagenes/slider/bloodyMary.png" alt="Bloody Mary">
                    </div>

                </div>

            </div>

            <button id="btn-derecha"><span class="fas fa-angle-right"></span></button>

        </div>

    </section>

    <!-- SERVICIOS -->
    <section id="servicios">

        <div class="servicios-titulos">
            <h2 class="subtitulo">Los mejores tragos del mundo</h2>
            <h1 class="titulo">Bienvenidos a Osirah Bar</h1>
        </div>

        <div class="servicios-container">

            <div class="imagen-central">
                <img src="../imagenes/centroServicio.png" alt="Bandeja de shots con limón">
            </div>

            <div class="items calidad">
                <p><span class="fas fa-cocktail"></span></p>
                <p class="titulo-item">Calidad</p>
                <p class="texto-item">Elaboración con la mejor técnica.</p>
            </div>

            <div class="items ingredientes">
                <p><span class="fas fa-utensils"></span></p>
                <p class="titulo-item">Ingredientes</p>
                <p class="texto-item">Utilización de productos de la mayor calidad posible.</p>
            </div>

            <div class="items rapidez">
                <p><span class="fas fa-clock"></span></p>
                <p class="titulo-item">Rapidez</p>
                <p class="texto-item">Entrega de la orden lo más pronto posible.</p>
            </div>

            <div class="items delivery">
                <p><span class="fas fa-shipping-fast"></span></p>
                <p class="titulo-item">Delivery</p>
                <p class="texto-item">Envíos a todo Madrid.</p>
            </div>

        </div>

    </section>

    <!-- FOOTER -->
    <?php
    include_once "footer.php";
    ?>

    <script src="../funciones/menu.js"></script>
    <script src="../funciones/slider.js"></script>
    <script src="../funciones/btn-top.js"></script>

</body>
</html>