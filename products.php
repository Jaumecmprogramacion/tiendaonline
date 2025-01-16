<?php
//establish the connection to database, and start the session
require("includes/common.php");
?>

<!--Specifies document type is html-->
<!DOCTYPE html>
<!--Specifies the language as English-->
<html lang="en">
    <head>
        <!--instructs browser on how to control the page's dimensions and scaling-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Title of products page-->
        <title>Product0s </title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
    </head>

    <body>
        <?php
        include 'includes/header.php';
        include 'includes/check-if-added.php';
        ?>
        <div class="container" id="content">
            <!-- Jumbotron Header -->
            <div class="jumbotron home-spacer" id="products-jumbotron">
                <h1>Bienvenidos a nuestra tienda</h1>
                <p>Tenemos los mejores dibujos, construcciones con macarrones y mil cosas más, descúbrelas!!</p>

            </div>
            <hr>

           
<!--lo sacamos todo de la base de datos,seccion dibujos-->
<?php
$resultado = mysqli_query($con, "SELECT * FROM items Where tipo='dibujos'");
while ($fila = $resultado->fetch_assoc()) {
    echo '
    <div class="row text-center" id="dibujos">
        <div class="col-md-3 col-sm-6 home-feature">
            <div class="thumbnail">
                <img src="img/dibujos/' . htmlspecialchars($fila['img'], ENT_QUOTES, 'UTF-8') . '" alt="' . htmlspecialchars($fila['name'], ENT_QUOTES, 'UTF-8') . '">
                <div class="caption">
                    <h3>' . htmlspecialchars($fila['name'], ENT_QUOTES, 'UTF-8') . '</h3>
                    <p>Precio: ' . htmlspecialchars($fila['price'], ENT_QUOTES, 'UTF-8') . '€</p>';
    
    if (!isset($_SESSION['email'])) {
        echo '<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>';
    } else {
        // Comprobar si el producto ya está en el carrito.
        if (check_if_added_to_cart($fila['id'])) {
            echo '<a href="#" class="btn btn-block btn-success" disabled>Añadido al carro</a>';
        } else {
            echo '<a href="cart-add.php?id=' . $fila['id'] . '" name="add" value="add" class="btn btn-block btn-primary">Añadir al carrito</a>';
        }
    }
    
    echo '      </div>
            </div>
        </div>';
}





$resultado = mysqli_query($con, "SELECT * FROM items Where tipo='manualidades'");
while ($fila = $resultado->fetch_assoc()) {
    echo '
    <div class="row text-center" id="manualidades">
        <div class="col-md-3 col-sm-6 home-feature">
            <div class="thumbnail">
                <img src="img/dibujos/' . htmlspecialchars($fila['img'], ENT_QUOTES, 'UTF-8') . '" alt="' . htmlspecialchars($fila['name'], ENT_QUOTES, 'UTF-8') . '">
                <div class="caption">
                    <h3>' . htmlspecialchars($fila['name'], ENT_QUOTES, 'UTF-8') . '</h3>
                    <p>Precio: ' . htmlspecialchars($fila['price'], ENT_QUOTES, 'UTF-8') . '€</p>';
    
    if (!isset($_SESSION['email'])) {
        echo '<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>';
    } else {
        // Comprobar si el producto ya está en el carrito.
        if (check_if_added_to_cart($fila['id'])) {
            echo '<a href="#" class="btn btn-block btn-success" disabled>Añadido al carro</a>';
        } else {
            echo '<a href="cart-add.php?id=' . $fila['id'] . '" name="add" value="add" class="btn btn-block btn-primary">Añadir al carrito</a>';
        }
    }
    
    echo '      </div>
            </div>
        </div>';
}

$resultado = mysqli_query($con, "SELECT * FROM items Where tipo='cajon'");
while ($fila = $resultado->fetch_assoc()) {
    echo '
    <div class="row text-center" id="cajon">
        <div class="col-md-3 col-sm-6 home-feature">
            <div class="thumbnail">
                <img src="img/dibujos/' . htmlspecialchars($fila['img'], ENT_QUOTES, 'UTF-8') . '" alt="' . htmlspecialchars($fila['name'], ENT_QUOTES, 'UTF-8') . '">
                <div class="caption">
                    <h3>' . htmlspecialchars($fila['name'], ENT_QUOTES, 'UTF-8') . '</h3>
                    <p>Precio: ' . htmlspecialchars($fila['price'], ENT_QUOTES, 'UTF-8') . '€</p>';
    
    if (!isset($_SESSION['email'])) {
        echo '<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>';
    } else {
        // Comprobar si el producto ya está en el carrito.
        if (check_if_added_to_cart($fila['id'])) {
            echo '<a href="#" class="btn btn-block btn-success" disabled>Añadido al carro</a>';
        } else {
            echo '<a href="cart-add.php?id=' . $fila['id'] . '" name="add" value="add" class="btn btn-block btn-primary">Añadir al carrito</a>';
        }
    }
    
    echo '      </div>
            </div>
        </div>';
}
?>




            
            <hr>
        </div>

        <?php include("includes/footer.php"); ?>
    </body>

</html>