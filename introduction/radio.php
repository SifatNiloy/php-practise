<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="radio" name="credit_card" value="visa" id=""> Visa <br>
        <input type="radio" name="credit_card" value="mastercard" id=""> Mastercard <br>
        <input type="radio" name="credit_card" value="amex" id=""> American Express <br>
        <input type="submit" name="confirm" value="confirm"> <br>
    </form>
</body>
</html>

<?php
    if(isset($_POST["confirm"])){
        if(isset($_POST["credit_card"])){
            $credit_card = $_POST["credit_card"];
            echo "You have selected {$credit_card}";
        } else {
            echo "You have not selected any credit card";
        }  
    }
?>