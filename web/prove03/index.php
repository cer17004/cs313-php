<?php
    session_start();
    $_SESSION['cart']= array();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="styleIndex.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <title>Shopping Page</title>
</head>
<body>
    <!--Navigation Bar-->
    <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">Apple Products</a>
          </div>
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Products</a></li>
            <li><a href="#">Cart</a></li>
          </ul>
        </div>
      </nav>
 

    <!--Grid System-->
    <div class='container'>
        <h1 class='text-center'>BOOTSTRAP PRODUCT GRID</h1>
        <hr>

        <!--Product-->
        <div class='col-md-3 product-grid'>
            <div class='image'>
                <a href ="#">
                    <img src='mulproduct.jpg' class='w-100' style='width:250px; height: 250px;'>
                    <div class="overlay">
                        <div class='detail'>View Details</div>
                    </div>
                </a>
            </div>
            <form action='cart.php' method='post'>
                <h4 class='text-center'>IPhone Multi-Color</h4>
                <h5 class='text-center'> Price: $299.99</h5>
                <input type='submit' value='BUY NOW' name='IPhone' class='btn buy'>
            </form>
        </div>

        <!--Product-->
        <div class='col-md-3 product-grid'>
            <div class='image'>
                <a href ="#">
                    <img src='watch.jpg' class='w-100' style='width:250px; height: 250px;'>
                    <div class="overlay">
                        <div class='detail'>View Details</div>
                    </div>
                </a>
            </div>
            <form action='cart.php' method='post'>
                <h4 class='text-center'>Apple Watch</h4>
                <h5 class='text-center'> Price: $399.00</h5>
                <input type='submit' value ='BUY NOW' name='Apple_Watch'class='btn buy'>
            </form>
        </div>

        <!--Product-->
        <div class='col-md-3 product-grid'>
            <div class='image'>
                <a href ="#">
                    <img src='macbook.jpg' class='w-100' style='width:250px; height: 250px;'>
                    <div class="overlay">
                        <div class='detail'>View Details</div>
                    </div>
                </a>
            </div>
            <form action='cart.php' method='post'>
                <h4 class='text-center'>Macbook</h4>
                <h5 class='text-center'> Price: $1,299.00</h5>
                <input type='submit' value ='BUY NOW' name='Macbook' class='btn buy'>
            </form>
        </div>

        <!--Product-->
        <div class='col-md-3 product-grid'>
            <div class='image'>
                <a href ="#">
                    <img src='ipad.jpg' class='w-100' style='width:250px; height: 250px;'>
                    <div class="overlay">
                        <div class='detail'>View Details</div>
                    </div>
                </a>
            </div>
            <form action='cart.php' method='post'>
                <h4 class='text-center'>IPad</h4>
                <h5 class='text-center'> Price: $799.00</h5>
                <input type='submit' value ='BUY NOW' name='IPad' class='btn buy'>
            </form>
        </div>

        <!--Product-->
        <div class='col-md-3 product-grid'>
            <div class='image'>
                <a href ="#">
                    <img src='airpods.jpg' class='w-100' style='width:250px; height: 250px;'>
                    <div class="overlay">
                        <div class='detail'>View Details</div>
                    </div>
                </a>
            </div>
            <form action='cart.php' method='post'>
                <h4 class='text-center'>Airpods</h4>
                <h5 class='text-center'> Price: $249.00</h5>
                <input type='submit' value ='BUY NOW' name='Airpods' class='btn buy'>
            </form>
        </div>

        <!--Product-->
        <div class='col-md-3 product-grid'>
            <div class='image'>
                <a href ="#">
                    <img src='appletv.jpg' class='w-100' style='width:250px; height: 250px;'>
                    <div class="overlay">
                        <div class='detail'>View Details</div>
                    </div>
                </a>
            </div>
            <form action='cart.php' method='post'>
                <h4 class='text-center'>Apple TV</h4>
                <h5 class='text-center'> Price: $199.00</h5>
                <input type='submit' value ='BUY NOW' name='Apple_TV' class='btn buy'>
            </form>
        </div>

        <!--Product-->
        <div class='col-md-3 product-grid'>
            <div class='image'>
                <a href ="#">
                    <img src='mac.jpg' class='w-100' style='width:250px; height: 250px;'>
                    <div class="overlay">
                        <div class='detail'>View Details</div>
                    </div>
                </a>
            </div>
            <form action='cart.php' method='post'>
                <h4 class='text-center'>Mac</h4>
                <h5 class='text-center'> Price: $1099.00</h5>
                <input type='submit' value ='BUY NOW' name='Mac' class='btn buy'>
            </form>
        </div>

        <!--Product-->
        <div class='col-md-3 product-grid'>
            <div class='image'>
                <a href ="#">
                    <img src='mouse.jpg' class='w-100' style='width:250px; height: 250px;'>
                    <div class="overlay">
                        <div class='detail'>View Details</div>
                    </div>
                </a>
            </div>
            <form action='cart.php' method='post'>
                <h4 class='text-center'>Mouse</h4>
                <h5 class='text-center'> Price: $79.00</h5>
                <input type='submit' value ='BUY NOW' name='Mouse' class='btn buy'>
            </form>
        </div>

    </div>
</body>
</html>