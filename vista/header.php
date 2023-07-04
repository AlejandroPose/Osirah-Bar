<div class="menu-principal">

        <div class="logo" id="logo">
            <img src="../imagenes/logo.png" alt="Logo">
        </div>

        <div class="menu-bar" id="menuBar">

            <i class="fas fa-angle-right" id="btnMenuClose"></i>

            <nav class="enlaces" id="enlaces">
                <ul>
                    <li><a href="inicio.php">Inicio</a></li>
                    <li><a href="carta.php">Carta</a></li>
                    <?php 
                        if ( $_SESSION["rol"] == "usuario" || $_SESSION["rol"] == "administrador") {
                            echo '<li><a href="descuentos.php">Descuentos</a></li>';
                        }
                    ?>
                    <li><a href="equipo.php">Equipo</a></li>
                    <?php 
                        if ( $_SESSION["rol"] == "usuario" || $_SESSION["rol"] == "administrador") {
                            echo '<li><a href="perfil.php">Perfil</a></li>';
                        }
                        if ( $_SESSION["rol"] == "administrador") {
                            echo '<li><a href="administrar.php">Administrar</a></li>';
                        }
                    ?>
                    <?php
                        if ( $_SESSION["rol"] != "administrador" && $_SESSION["rol"] != "usuario" ) {
                            echo    '<li><a href="registro.php">Registrarse</a></li>
                                    <li><a href="iniciarSesion.php">Iniciar Sesión</a></li>';
                        } else {
                            echo    '<li>
                                        <form action="">
                                            <input class="btn-cerrar" name="cerrar" type="submit" value="Cerrar sesión">
                                        </form>
                                    </li>';
                            if (isset($_REQUEST['cerrar'])) {
                                $_SESSION['rol'] = "";
                                $_SESSION['usuario'] = "";
                                header('location:inicio.php');
                            }
                        }
                    ?>
                    
                </ul>
            </nav>

            <div class="sociales">
                <div>
                    <a href=""><span class="fab fa-facebook"></span></a>
                    <a href=""><span class="fab fa-instagram"></span></a>
                    <a href=""><span class="fab fa-twitter"></span></a>
                    <a href=""><span class="fab fa-youtube"></span></a>
                </div>

            </div>

        </div>

        <i class="fas fa-bars" id="btnMenuOpen"></i>
        
    </div>