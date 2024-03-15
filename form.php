
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <!-- <form action="index.php" method="post">
        <label>username: </label><br>
        <input type="text" name="username" id=""><br>
        <label>password: </label><br>
        <input type="password" name="password" id=""><br>
        <input type="submit" value="submit">
    </form> -->

    <form action="index.php" method="post">
        <label>food: </label>
        <input type="text" name="quantity" id="">
        <input type="submit" value="submit">
    </form>
</body>
</html>
<?php
    // echo "{$_POST["username"]} <br>";
    // echo "{$_POST["password"]} <br>" ;
    $item="pizza";
    $price=5.99;
    $quantity= $_POST["quantity"];

    // $total_cost= null;

    $total_cost = $quantity * $price;

    echo "you have ordered {$quantity}X {$item} <br>";
    echo "total pizza cost is : \${$total_cost} <br>"
?>