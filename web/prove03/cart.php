<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <title>Shopping Cart</title>

</head>
<body>

    <!--Navigation Bar-->
    <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="">Apple Products</a>
          </div>
          <ul class="nav navbar-nav">
            <li><a href="index.php">Products</a></li>
            <li class='active'><a href=''>Cart</a></li>
          </ul>
        </div>
    </nav>

    <h1>Shopping Cart</h1>
    <?php
        // to change a session variable, just overwrite it
        if(isset($_POST["IPhone"])){
            $product = array('product'=>'IPhone','price'=> 299.99);
            if(!in_array($product,$_SESSION['cart'])){
                array_push($_SESSION['cart'],$product);
            } 
        }

        if(isset($_POST["Apple_Watch"])){
            $product = array('product'=>'Apple Watch','price'=> 399.99);
            if(!in_array($product,$_SESSION['cart'])){
                array_push($_SESSION['cart'],$product);
            } 
        }

        if(isset($_POST["Macbook"])){
            $product = array('product'=>'Macbook','price'=> 1299.00);
            if(!in_array($product,$_SESSION['cart'])){
                array_push($_SESSION['cart'],$product);
            } 
        }
        if(isset($_POST["IPad"])){
            $product = array('product'=>'IPad','price'=> 799.00);
            if(!in_array($product,$_SESSION['cart'])){
                array_push($_SESSION['cart'],$product);
            } 
        }
        if(isset($_POST["Airpods"])){
            $product = array('product'=>'Airpods','price'=> 249.00);
            if(!in_array($product,$_SESSION['cart'])){
                array_push($_SESSION['cart'],$product);
            } 
        }
        if(isset($_POST["Apple_TV"])){
            $product = array('product'=>'Apple TV','price'=> 199.00);
            if(!in_array($product,$_SESSION['cart'])){
                array_push($_SESSION['cart'],$product);
            } 
        }
        if(isset($_POST["Mac"])){
            $product = array('product'=>'Mac','price'=> 1099.00);
            if(!in_array($product,$_SESSION['cart'])){
                array_push($_SESSION['cart'],$product);
            } 
        }
        if(isset($_POST["Mouse"])){
            $product = array('product'=>'Mouse','price'=> 79.00);
            if(!in_array($product,$_SESSION['cart'])){
                array_push($_SESSION['cart'],$product);
            } 
        }
        
        for($i=0; $i<sizeof($_SESSION['cart']); $i++) { 
            while (list ($key, $val) = each ($_SESSION['cart'][$i])) { 
                echo "$val "; 
            }
            echo "<br>";
        }

        
    ?>

    <form action='checkout.php' method='post'>
        <input type="checkbox" name="reset" value="Reset">Reset
    <input type='submit' value ='BUY NOW' name='passCart' class='btn buy'><br> 


    <a href='index.php'><button type='button' class='btn buy'>Return to Shopping</button></a>


</body>
</html>