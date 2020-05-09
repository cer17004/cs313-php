<?php
    session_start();
    if(!empty($_POST['street'])){
        $street = ( isset( $_POST['street'] ) ) ? filter_var( $_POST['street'], FILTER_SANITIZE_STRING ) : '';
    }else{
        $street='Unknown';
    }
    if(!empty($_POST['city'])){
        $city = ( isset( $_POST['city'] ) ) ? filter_var( $_POST['city'], FILTER_SANITIZE_STRING ) : '';
    }else{
        $city='Unknown';
    }
    if(!empty($_POST['state'])){
        $state = ( isset( $_POST['state'] ) ) ? filter_var( $_POST['state'], FILTER_SANITIZE_STRING ) : '';
    }else{
        $state='Unknown';
    }
    if(!empty($_POST['postal'])){
        $postal = ( isset( $_POST['postal'] ) ) ? filter_var( $_POST['postal'], FILTER_SANITIZE_STRING ) : '';
    }else{
        $postal ='Unknown';
    }
    if(!empty($_POST['country'])){
        $country = ( isset( $_POST['country'] ) ) ? filter_var( $_POST['country'], FILTER_SANITIZE_STRING ) : '';
    }else{
        $country ='Unknown';
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <title>Confirmation Page</title>
</head>
<body>

    <!--Navigation Bar-->
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="">Apple Products</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="">Products</a></li>
                <li><a href=''>Cart</a></li>
                <li><a href=''>Checkout</a></li>
                <li class='active'><a href=''>Confirmation</a></li>
            </ul>
        </div>
    </nav>
    
    <h3>Now shipping to the following address.</h3>

    <table class="table">
        <tr>
            <td>Street:</td>
            <td><?php echo $street; ?></td>
        </tr>
        <tr>
            <td>City:</td>
            <td><?php echo $city; ?></td>
        </tr>
        <tr>
            <td>State:</td>
            <td><?php echo $state; ?></td>
        </tr>
        <tr>
            <td>Postal:</td>
            <td><?php echo $postal; ?></td>
        </tr>
        <tr>
            <td>Country:</td>
            <td><?php echo $country; ?></td>
        </tr>
    </table>

    <h4>Products:</h4>

    <?php
        for($i=0; $i<sizeof($_SESSION['cart']); $i++) { 
            while (list ($key, $val) = each ($_SESSION['cart'][$i])) { 
                echo "$val "; 
            }
            echo "<br>";
        }
    ?>

</body>
</html>