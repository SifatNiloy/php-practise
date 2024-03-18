<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        username: <br>
        <input type="text" name="username" id="username"><br>
        age : <br>
        <input type="text" name="age" id="age"><br>
        email : <br>
        <input type="text" name="email" id="email"><br>
        <input type="submit" name="submit" value="Submit"><br>
    </form>
</body>
</html>

<?php
    // if(isset($_POST['submit'])){
    //     $usernameMain= filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    //     $age= filter_input(INPUT_POST, 'age', FILTER_SANITIZE_NUMBER_INT);
    //     $email= filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    //     echo "Username: " . $usernameMain . "<br>";
    //     echo "Age: " . $age . "<br>";
    //     echo "Email: " . $email . "<br>";
    // }

    //filter validate
    if(isset($_POST['submit'])){
        $usernameMain= filter_input(INPUT_POST, 'username', );
        $age= filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT);
        $email= filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);   
        if($usernameMain && $age && $email){
            echo "Username: " . $usernameMain . "<br>";
            echo "Age: " . $age . "<br>";
            echo "Email: " . $email . "<br>";
        }else{  
            echo "Invalid input";
        }
    }
?>