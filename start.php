
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>"  method="post" >
        username: 
        <input type="text" name="username"><br>
        <input type="submit" value="submit">
    </form>
</body>
</html>

<?php
    // foreach($_SERVER as $key => $value){
    //     echo $key . " = " . $value . "<br>";
    // }
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST["username"];
        echo $username . "<br>" ;
    }


    $password='niloy124';
    $hash = password_hash($password, PASSWORD_DEFAULT);
    // echo $hash . "<br>";
    if(password_verify("niloy124", $hash)){
        echo "password matched";
    }else{  
        echo "password not matched";
    }


?>
