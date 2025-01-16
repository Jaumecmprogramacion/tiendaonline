<?php

//establish the connection to database, and start the session
require("includes/common.php");

// Redirects the user to products page if he/she is logged in.
if (isset($_SESSION['email'])) {
  header('location: products.php');
}

?>

<!--Specifies document type is html-->
<!DOCTYPE html>
<!--Specifies the language as English-->
<html lang="es">
    <head>
        <!--instructs browser on how to control the page's dimensions and scaling-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Title of index page-->
        <title>Bienvenido | Manos Pequeñas, Grandes Regalos</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body style="padding-top: 50px;">
        <!-- Header -->
        <?php
        include 'includes/header.php';
        ?>
        <!--Header end-->

        <div id="content">
            <!--menu/banner-->
            <div id = "banner_image">
                <div class="container"> 
                    <center>
                        <div id="banner_content">
                            <h1>Vendemos cosas de valor incalculable.</h1>
                            <p>No tenemos descuentos, artículos únicos. </p>
                            <br/>
                            <a  href="products.php" class="btn btn-danger btn-lg active">Compra ahora</a>
                        </div>
                    </center>
                </div>
            </div>
            <!--Fin menu/banner-->

            <!--Lista de categorías -->
            <div class="container">
                <div class="row text-center" id="item_list">
                    <div class="col-sm-4">
                        <a href="products.php#dibujos" >
                            <div class="thumbnail">
                                <img src="img/dibujos/01.jpg" alt="">
                                <div class="caption">
                                    <h3>Dibujos</h3>
                                    <p>Con tecnicas innovadoras, sin límite a la imaginación.</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="products.php#manualidades" >
                            <div class="thumbnail">
                                <img src="img/manualidades/02.jpg" alt="">
                                <div class="caption">
                                    <h3>Manualidades</h3>
                                    <p>Manos pequeñas, arte enorme.</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="products.php#cajon" >
                            <div class="thumbnail">
                                <img src="img/cajon/01.jpg" alt="">
                                <div class="caption">
                                    <h3>Cajón de Sastre</h3>
                                    <p>Obras inclasificables, transcienden a cualquier categoría.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            
            <!--fin Lista de categorías-->
        </div>
        
        <!--Footer-->
        <?php
        include 'includes/footer.php';
        ?>
        <!--Footer end-->
   
    </body> 
</html>