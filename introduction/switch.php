<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    <input type="submit" value="stop">
    </form>
</body>
</html>

<?php 
    // $grade="A";
    // switch($grade){
    //     case "A":
    //         echo "Excellent";
    //         break;
    //     case "B":
    //         echo "Good";
    //         break;
    //     case "C":
    //         echo "Fair";
    //         break;
    //     case "D":
    //         echo "Poor";
    //         break;
    //     default:
    //         echo "Invalid Grade"; }
    
    $seconds= 0;
    $running= true;

    while($running){
        if(isset($_POST["stop"])){
            $running= false;
        }
        else{
            $seconds++;
            echo $seconds ."<br>";
        }
    }
?>

