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
    <link rel="stylesheet" href="../estilos/iniciarSesion.css">
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

    <!-- FORMULARIO INICAR SESION -->
    <section id="iniciarSesion">
        
        <div class="titulo-iniciarSesion">
            <h2 class="subtitulo">Accede con tus datos</h2>
            <h1 class="titulo">Iniciar Sesion</h1>
        </div>

        <form action="" method="post" enctype="multipart/form-data" id="formularioIniciarSesion">

            <div class="two-fields">

                <!--<div class="inputConIcon">
                    <input type="text" id="nombre" name="nombre" class="input-text" placeholder="Nombre">
                    <i class="fas fa-user"></i>
                </div>-->

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
                <input type="submit" name="entrar" class="boton btn-input" value="Enviar">
            </div>

            <?php

            if ( isset($_POST['entrar']) ) {

                if ( isset($_POST['usuario']) && isset($_POST['password']) ) {

                    $mysql_host = "localhost:3306";
                    $mysql_database = "osirahbar";
                    $mysql_user = "root";
                    $mysql_password = "";
                    $conexion = mysqli_connect($mysql_host, $mysql_user, $mysql_password) or die("No ha podido realizarse la conexión");
                    mysqli_select_db($conexion, $mysql_database) or die("No ha podido seleccionarse la base de datos");

                    $contrasena = $_POST['password'];
                    $nick = $_POST['usuario'];

                    $consulta1 = "SELECT count(*) from usuarios where usuario like '$nick';";
                    $resultado1 = mysqli_query($conexion, $consulta1);
                    $linea1 = mysqli_fetch_array($resultado1);
                    if ( $linea1["count(*)"] == 1 ) {

                        $consulta2 = "SELECT contrasena from usuarios where usuario like '$nick';";
                        $resultado2 = mysqli_query($conexion, $consulta2);
                        $linea2 = mysqli_fetch_array($resultado2);

                        if( password_verify($contrasena, $linea2['contrasena']) ) {

                            $consulta3 = "SELECT rol from usuarios where usuario like '$nick';";
                            $resultado3 = mysqli_query($conexion, $consulta3);
                            $linea3 = mysqli_fetch_array($resultado3);
                            $_SESSION['rol'] = $linea3['rol'];
                            $_SESSION['usuario'] = $nick;
                            header("location:inicio.php");

                        } else {

                            print "Contraseña incorrecta";

                        }

                    } else {

                        print "No existe ese usuario en la base de datos";

                    }

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