<!-- código del header, el menu superior  -->
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <!--menu cuando se reduce la pantalla-->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand" href="index.php">Manos Pequeñas, Grandes Regalos</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <!--Cambia dependiendo si el usuario ha iniciado sesión o no-->
                <?php
                if (isset($_SESSION['email'])) {
                    ?>
                    <li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Carrito </a></li>
                    <li><a href = "settings.php"><span class = "glyphicon glyphicon-user"></span> Herramientas</a></li>
                    <li><a href = "orderhistory.php"><span class = "glyphicon glyphicon-file"></span> Historial de pedidos</a></li>
                    <li><a href = "logout_script.php"><span class = "glyphicon glyphicon-log-in"></span> Cerrar sesión</a></li>
                    ?>
                    <?php
                } else {
                    ?>
                    <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Regístrate</a></li>
                    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Iniciar sesión</a></li>
                    <li><a href="aboutus.php"><span class="glyphicon glyphicon-tasks"></span> Sobre nosotros</a></li>
                    <li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span> Contacto</a></li>
                        <?php
                    }
                    ?>
            </ul>
        </div>
    </div>
</div>