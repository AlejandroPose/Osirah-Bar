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
    <link rel="stylesheet" href="../estilos/equipo.css">
    <link rel="stylesheet" href="../estilos/equipo-info.css">
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

    <!-- EQUIPO DE TRABAJO -->
    <section id="equipo">

        <div class="persona">
            <img src="../imagenes/equipo/camarero.png" alt="Camarero" class="persona-imagen">
            <div class="persona-info">
                <h2>James Smith</h2>
                <p>Camarero</p>
                <div class="social-media">
                    <a href=""><span class="fab fa-facebook"></span></a>
                    <a href=""><span class="fab fa-instagram"></span></a>
                    <a href=""><span class="fab fa-twitter"></span></a>
                    <a href=""><span class="fab fa-linkedin"></span></a>
                </div>
            </div>
        </div>

        <div class="persona">
            <img src="../imagenes/equipo/anfitrion.png" alt="Anfitrion" class="persona-imagen">
            <div class="persona-info">
                <h2>Joseph Frase</h2>
                <p>Anfitrión</p>
                <div class="social-media">
                    <a href=""><span class="fab fa-facebook"></span></a>
                    <a href=""><span class="fab fa-instagram"></span></a>
                    <a href=""><span class="fab fa-twitter"></span></a>
                    <a href=""><span class="fab fa-linkedin"></span></a>
                </div>
            </div>
        </div>

        <div class="persona">
            <img src="../imagenes/equipo/barista.png" alt="Barista" class="persona-imagen">
            <div class="persona-info">
                <h2>Lucas Lonsil</h2>
                <p>Barista</p>
                <div class="social-media">
                    <a href=""><span class="fab fa-facebook"></span></a>
                    <a href=""><span class="fab fa-instagram"></span></a>
                    <a href=""><span class="fab fa-twitter"></span></a>
                    <a href=""><span class="fab fa-linkedin"></span></a>
                </div>
            </div>
        </div>

        <div class="persona">
            <img src="../imagenes/equipo/cocinero.png" alt="Cocinero" class="persona-imagen">
            <div class="persona-info">
                <h2>Aldro Posira</h2>
                <p>Cocinero</p>
                <div class="social-media">
                    <a href=""><span class="fab fa-facebook"></span></a>
                    <a href=""><span class="fab fa-instagram"></span></a>
                    <a href=""><span class="fab fa-twitter"></span></a>
                    <a href=""><span class="fab fa-linkedin"></span></a>
                </div>
            </div>
        </div>

    </section>

    <!-- INFO EQUIPO -->
    <section id="info-equipo">

        <div class="equipo-titulos">
            <h2 class="subtitulo">Los mejores trabajadores del mundo</h2>
            <h1 class="titulo">Bienvenidos a Osirah Bar</h1>
        </div>

        <div class="equipo-container">

            <div class="team james">
                <p><span class="fas fa-address-card"></span></p>
                <p class="titulo-team">James Smith</p>
                <p class="texto-team">Camarero, 25 años, amable.</p>
            </div>

            <div class="team joseph">
                <p><span class="fas fa-address-card"></span></p>
                <p class="titulo-team">Joseph Frase</p>
                <p class="texto-team">Anfitrión, 30 años, ordenado.</p>
            </div>

            <div class="team lucas">
                <p><span class="fas fa-address-card"></span></p>
                <p class="titulo-team">Lucas Lonsil</p>
                <p class="texto-team">Barista, 25 años, divertido.</p>
            </div>

            <div class="team aldro">
                <p><span class="fas fa-address-card"></span></p>
                <p class="titulo-team">Aldro Posira</p>
                <p class="texto-team">Cocinero, 40 años, profesional.</p>
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