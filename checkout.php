<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
h3{
    font-style:bold;
    color:red;
}
form{
    text-align :center;
}

    </style>
<?php
        require('nav.php');
        session_start();
        
        $id = $_REQUEST['Book_id']; // geting id
        $_SESSION["Book_id"] = $id;
        require('payed.php');
        // getting access of that file
    ?>

    <!-- making a form -->
    <br>
    <br>
    <form  class="form" action="" method="POST"> <!-- creating form -->
     <h3>   FirstName: <input type="text" name="firstn" >*</h3><br><br>
       <h3> LastName: <input type="text" name="lastn" >*</h3><br><br>
        Payment options: <br>
                <input type="radio" name="method" <?php if (isset($method) && $method=="Cash On Delivery") echo "checked";?> value="Cash On Delivery">Cash On Delivery
                <input type="radio" name="method" <?php if (isset($method) && $method=="Debit Card") echo "checked";?> value="Debit Card">Debit Card

                <input type="radio" name="method" <?php if (isset($method) && $method=="Credit Card") echo "checked";?> value="Credit Card">Credit Card<br>
                <input type="radio" name="method" <?php if (isset($method) && $method=="Master Card") echo "checked";?> value="Master Card">Master Card
                <br><br>
        <input class="button" type="submit" name="submit" value="Checkout">
    </form>
   
</body>
</html>