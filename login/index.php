<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>This is login page</h2>
    <a href="home.php">go to home page</a>
    <form action="index.php" method="post">
        <input type="text" name="username" placeholder="username"><br>
        <input type="password" name="password" placeholder="password"><br>
        <input type="submit" value="login" name="login">
    </form>
</body>
</html>

<?php
    if(isset($_POST['login'])){
        if(!empty($_POST['username']) && !empty($_POST['password']))
        {   
            $username = $_POST['username'];
            $password = $_POST['password'];
            $_SESSION['username']= $username;
            $_SESSION['password']= $password;
            
            header("Location: home.php");
        }else{  
            echo "Invalid input";
        }
    }

?>