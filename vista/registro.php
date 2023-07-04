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
    <link rel="stylesheet" href="../estilos/registro.css">
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

    <!-- FORMULARIO REGISTRO -->
    <section id="registro">
        
        <div class="titulo-registro">
            <h2 class="subtitulo">Bienvenido a la familia</h2>
            <h1 class="titulo">Regístrate</h1>
        </div>

        <form action="" method="post" enctype="multipart/form-data" id="formularioRegistro">

            <div class="two-fields">

                <div class="inputConIcon">
                    <input type="text" id="usuario" name="usuario" class="input-text" placeholder="Usuario" required>
                    <i class="fas fa-user"></i>
                </div>

                <div class="inputConIcon">
                    <input type="password" id="password" name="password" class="input-password" placeholder="Contraseña" required>
                    <i class="fas fa-key"></i>
                </div>

            </div>

            <div class="fields-btn">
                <input type="submit" name="subir" class="boton btn-input" value="Enviar">
            </div>

            <?php
            if ( isset($_POST['subir']) ) {

                if ( isset($_POST['usuario']) && isset($_POST['password']) ) {

                    $mysql_host = "localhost:3306";
                    $mysql_database = "osirahbar";
                    $mysql_user = "root";
                    $mysql_password = "";
                    $conexion = mysqli_connect($mysql_host, $mysql_user, $mysql_password) or die("No ha podido realizarse la conexión.");
                    mysqli_select_db($conexion, $mysql_database) or die("No ha podido seleccionarse la base de datos.");

                    $nombre = (isset($_POST["usuario"])) ? htmlspecialchars(trim(strip_tags($_POST["usuario"])), ENT_QUOTES, "UTF-8") : "";
                    $contrasena = $_POST['password'];
                    $pass = password_hash($contrasena, PASSWORD_DEFAULT);

                    $sql = "INSERT into usuarios (usuario, contrasena, rol) values ('$nombre', '$pass', 'usuario');";
                    mysqli_query($conexion, $sql);
                    header("location:iniciarSesion.php");

                } else {

                    print "<p class='mensajeError'>Faltan datos por rellenar.</p>";

                }

            }
            ?>

        </form>

    </section>

    <!-- FOOTER -->
    <?php
    include_once "footer.php";
    ?>

    <script src="../funciones/menu.js"></script>
    <script src="../funciones/btn-top.js"></script>

</body>
</html>