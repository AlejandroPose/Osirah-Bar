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
    <link rel="stylesheet" href="../estilos/perfil.css">
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

    <!-- PERFIL -->
    <section id="perfil">

        <?php

            $mysql_host = "localhost:3306";
            $mysql_database = "osirahbar";
            $mysql_user = "root";
            $mysql_password = "";

            $conexion = mysqli_connect($mysql_host, $mysql_user, $mysql_password) or die("No ha podido realizarse la conexión");
            mysqli_select_db($conexion, $mysql_database) or die("No ha podido seleccionarse la base de datos");

            $nick = $_SESSION['usuario'];

            $sql1 = "SELECT usuario, contrasena, rol from usuarios where usuario = '$nick';";
            $resultado = mysqli_query($conexion, $sql1);
            $linea = mysqli_fetch_array($resultado);

            echo '<h1 class="titulo">Perfil de Usuario</h1>';
            echo '<h2 class="subtitulo">Aquí puede cambiar su nombre de usuario y contraseña</h2>';

            // ----- USUARIO ----- //
            echo '<div class="datosUsuario">';
            echo '<p class="titulo-usuario">Usuario: ' . $linea["usuario"] . '</p>';
            echo    '
                    <form action="" class="formUser">
                        <input name="nickNew" type="text" placeholder="Ingrese su nuevo usuario">
                        <input class="boton" name="nickSub" type="submit" value="Cambiar usuario">
                    </form>
                    ';
            if ( isset($_REQUEST['nickSub']) ) {
                if ( isset($_REQUEST['nickNew']) ) {
                    $newUser = (isset($_REQUEST["nickNew"])) ? htmlspecialchars(trim(strip_tags($_REQUEST["nickNew"])), ENT_QUOTES, "UTF-8") : "";
                    echo '<form action="" method="post" class="checkUser">
                            <input class="controls" type="password" name="contrasena" id="contrasena" placeholder="Ingrese su contraseña para realizar el cambio">
                            <input class="boton" name="entrar" type="submit" value="Entrar">
                        </form>';
                    if ( isset($_REQUEST['entrar']) ) {
                        if ( isset($_REQUEST['contrasena']) ) {
                            $contrasena = $_REQUEST['contrasena'];
                            $consulta = "SELECT contrasena from usuarios where usuario like '$nick';";
                            $resultad = mysqli_query($conexion, $consulta);
                            $linea1 = mysqli_fetch_array($resultad);
                            if (password_verify($contrasena, $linea1['contrasena'])) {
                                $sql2 = "UPDATE usuarios set usuario = '$newUser' where usuario = '$nick';";
                                mysqli_query($conexion, $sql2);
                                $_SESSION['usuario'] = $newUser;
                                header('location:perfil.php');
                            } else {
                                echo "Contraseña incorrecta";
                            }
                        }
                    }
                }
            }
            echo '</div>';

            // ----- CONTRASEÑA ----- //
            echo '<div class="datosClave">';
            echo '<p class="titulo-clave">Contraseña:</p>';
            echo '
                    <form action="" class="formClave">
                        <input name="passNew" type="text" placeholder="Ingrese su nueva contraseña">
                        <input name="passSub" class="boton" type="submit" value="Contraseña">
                    </form>
                ';
            if (isset($_REQUEST['passSub'])) {
                if (isset($_REQUEST['passNew'])) {
                    $newPass = (isset($_REQUEST["passNew"])) ? htmlspecialchars(trim(strip_tags($_REQUEST["passNew"])), ENT_QUOTES, "UTF-8") : "";
                    $pass = password_hash($newPass, PASSWORD_DEFAULT, [15]);
                    echo '<form action="" method="post" class="checkClave">
                            <input class="controls" type="password" name="contrasena" id="contrasena" placeholder="Ingrese su contraseña anterior">
                            <input class="boton" name="entrar" type="submit" value="Entrar">
                        </form>';
                    if (isset($_REQUEST['entrar'])) {
                        if (isset($_REQUEST['contrasena'])) {
                            $contrasena = $_REQUEST['contrasena'];
                            $consulta = "SELECT contrasena from usuarios where usuario like '$nick';";
                            $resultad = mysqli_query($conexion, $consulta);
                            $linea1 = mysqli_fetch_array($resultad);
                            if (password_verify($contrasena, $linea1['contrasena'])) {
                                $sql5 = "UPDATE usuarios set contrasena = '$pass' where usuario = '$nick';";
                                mysqli_query($conexion, $sql5);
                                header('location:perfil.php');
                            }
                        }
                    }
                }
            }
            echo '</div>';

        ?>

    </section>

    <!-- FOOTER -->
    <?php
    include_once "footer.php";
    ?>

    <script src="../funciones/menu.js"></script>
    <script src="../funciones/btn-top.js"></script>

</body>

</html>