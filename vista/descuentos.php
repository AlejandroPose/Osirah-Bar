<?php
session_name('osirahbar');
session_start();
if ($_SESSION['rol'] == "administrador" || $_SESSION['rol'] == "usuario") {
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
    <link rel="stylesheet" href="../estilos/descuentos.css">
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

    <!-- DESCUENTOS -->
    <section id="descuentos">

        <div class="descuentos-titulos">
            <h2 class="subtitulo">Los mejores descuentos del mundo</h2>
            <h1 class="titulo">Conoce nuestras ofertas</h1>
        </div>

        <div class="descuentos-container">

            <div class="oferta 2x1">
                <p><span class="fas fa-tag"></span></p>
                <div class="oferta-texto">
                    <p class="titulo-oferta">2x1 en todos nuestros tragos</p>
                    <p class="texto-oferta">De lunes a viernes, se paga el trago más caro de la consumisión.</p>
                </div>
            </div>

            <div class="oferta 20menos">
                <p><span class="fas fa-tag"></span></p>
                <div class="oferta-texto">
                    <p class="titulo-oferta">-20% en tu próxima visita</p>
                    <p class="texto-oferta">Se descontará un 20% del total de la consumisión en su factura.</p>
                </div>
            </div>

            <div class="oferta 3x2">
                <p><span class="fas fa-tag"></span></p>
                <div class="oferta-texto">
                    <p class="titulo-oferta">3x2 en todos nuestros tragos</p>
                    <p class="texto-oferta">Los fines de semana, se pagan los tragos más caros de la consumisión.</p>
                </div>
            </div>

            <div class="oferta viernes10">
                <p><span class="fas fa-tag"></span></p>
                <div class="oferta-texto">
                    <p class="titulo-oferta">Todo a 10€</p>
                    <p class="texto-oferta">Los viernes, todos los tragos a 10€.</p>
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

<?php
} else {
    header("location:inicio.php");
}
?>