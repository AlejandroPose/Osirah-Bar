<?php
session_name('osirahbar');
session_start();
if ( $_SESSION['rol'] == "administrador" ) {
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
    <link rel="stylesheet" href="../estilos/administrar.css">
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

    <!-- ADMINISTRAR -->
    <section id="administrar">

    <div class="admin-titulos">
            <h2 class="subtitulo">Administra a tus usuarios como quieras</h2>
            <h1 class="titulo">Bienvenidos a tu página web</h1>
    </div>

    <?php
        $mysql_host = "localhost:3306";
        $mysql_database = "osirahBar";
        $mysql_user = "root";
        $mysql_password = "";
        $conexion = mysqli_connect($mysql_host, $mysql_user, $mysql_password) or die("No ha podido realizarse la conexión");
        mysqli_select_db($conexion, $mysql_database) or die("No ha podido seleccionarse la base de datos");
        $sql = "SELECT id_usuario, usuario, rol from usuarios;";
        $resultado = mysqli_query($conexion, $sql);
        while($linea=mysqli_fetch_array($resultado)){
            if ($linea['rol'] != "administrador") {
                $id = $linea["id_usuario"];
            echo "<p class='personas'>Usuario: " . $linea["usuario"] . "</p>";
            echo '
                <form action="" class="formPersonas">
                    <input type="hidden" name="id" value="'.$linea["id_usuario"].'">
                    <input class="update boton" name="update" type="submit" value="Update">
                    <input class="delete boton" name="delete" type="submit" value="Delete">
                </form>
            ';
            if (isset($_REQUEST['update'])) {
                $id = $_REQUEST['id'];
                $mysql_host = "localhost:3306";
                $mysql_database = "osirahbar";
                $mysql_user = "root";
                $mysql_password = "";
                $conexion = mysqli_connect($mysql_host, $mysql_user, $mysql_password) or die("No ha podido realizarse la conexión");
                mysqli_select_db($conexion, $mysql_database) or die("No ha podido seleccionarse la base de datos");
                $sql = "UPDATE usuarios set rol = 'administrador' where id_usuario = $id;";
                mysqli_query($conexion, $sql);
                header('location:administrar.php');
            }
            if (isset($_REQUEST['delete'])) {
                $id = $_REQUEST['id'];
                $mysql_host = "localhost:3306";
                $mysql_database = "osirahbar";
                $mysql_user = "root";
                $mysql_password = "";
                $conexion = mysqli_connect($mysql_host, $mysql_user, $mysql_password) or die("No ha podido realizarse la conexión");
                mysqli_select_db($conexion, $mysql_database) or die("No ha podido seleccionarse la base de datos");
                $sql = "DELETE from usuarios where id_usuario = $id;";
                mysqli_query($conexion, $sql);
                header('location:administrar.php');
            }
            echo "<br>";
            }
        }
        
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

<?php
} else {
    header("location:inicio.php");
}
?>