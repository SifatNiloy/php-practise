<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="index.php" method="post">
    <input type="text" placeholder="enter number" name="number" id="">
    <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>

<?php
    function is_even($number){
        if($number % 2 == 0){
             echo "The number is even";
        }else{
            echo "The number is odd";
        }

        return;
    }

    if(isset($_POST["submit"])){
        if(isset($_POST["number"])){
            $number = $_POST["number"];
            is_even($number);
        } else {
            echo "You have not entered any number";
        }  
    }
?>