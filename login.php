<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" id=""><br>
        <label for="password">Password</label>
        <input type="password" name="password" id=""><br>
        <input type="submit" value="login"> <br>
    </form>

</body>
</html>

<?php
    //isset and empty
    //empty returns true if the variable is an empty string, false, 0, "0", null, or an empty array
    //isset returns true if the variable exists and is not null
    // $name=false;
    // if(isset($name)){
    //     echo "Name is set";
    // }else{
    //     echo "Name is not set";
    // }
    
    // echo "<br>";
    // if(empty($name)){
    //     echo "Name is empty";
    // }else{  
    //     echo "Name is not empty";
    // }

    // foreach ($_POST as $key => $value) {
    //     echo $key . " : " . $value . "<br>";
    // }

    // if(isset($_POST["login"])){
    //     echo "you tried to login";
    // }
    if (isset ($_POST["username"]) && isset($_POST["password"])){
        $username = $_POST["username"];
        $password = $_POST["password"];
        if(empty($username) || empty($password)){
            echo "Username or password is empty";
        }else{
            echo "Username and password are not empty";
        }
    }

?>