<?php
    include("database.php");

    $username = "harrypotter";
    $password = "aceio";
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users(user, password) 
        VALUES('$username', '$hash')";

    try {
        if(mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            throw new mysqli_sql_exception(mysqli_error($conn));
        }
    } catch(mysqli_sql_exception $e) {
        echo "Couldn't register user. Error: " . $e->getMessage();
    }
    mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    hello world <br>
</body>
</html>