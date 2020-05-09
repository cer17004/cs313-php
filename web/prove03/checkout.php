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

    <title>Checkout Page</title>
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
                <li><a href='cart.php'>Cart</a></li>
                <li class='active'><a href=''>Checkout</a></li>
            </ul>
        </div>
    </nav>

    <form action='confirmation.php' method='post'>
        <!-- Street -->
        <div class="form-group">
            <label for="streetInput">Street</label>
            <input type="text" class="form-control" id="streetInput" name='street'>
        </div>
        
        <!-- City -->
        <div class="form-group">
            <label for="cityInput">City</label>
            <input type="text" class="form-control" id="cityInput" name='city'>
        </div>
        
        <!-- State -->
        <div class="form-group">
            <label for="stateInput">State</label>
            <input type="text" class="form-control" id="stateInput" name='state' placeholder='CA'>
        </div>

        <!-- Postal Code -->
        <div class="form-group">
            <label for="postalInput">Postal Code</label>
            <input type="text" class="form-control" id="postalInput" name='postal'>
        </div>

        <!-- Country -->
        <div class="form-group">
            <label for="countryInput">Country</label>
            <input type="text" class="form-control" id="countryInput" name='country' placeholder='USA'>
        </div>

        <a href='cart.php'><button type='button' class='btn btn-primary'>Return to Cart</button></a>
        <form action='confirmation.php' method='post'>
        <button type="submit" class="btn btn-primary">Purchase!</button>
        
    </form>

</body>
</html>