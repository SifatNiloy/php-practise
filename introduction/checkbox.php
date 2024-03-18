<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="checkbox" name="foods[]" value="pizza" id="">pizza <br>
        <input type="checkbox" name="foods[]" value="burger" id=""> burger <br>
        <input type="checkbox" name="foods[]" value="pasta" id=""> pasta <br>
        
        <input type="submit" name="confirm" value="confirm"> <br>
    </form>
</body>
</html>

<?php
    if(isset($_POST["confirm"])){
        if(isset($_POST["foods"])){
            $foods = $_POST["foods"];
            echo "You have selected ";
            foreach ($foods as $food) {
                echo $food . " ";
            }
        } else {
            echo "You have not selected any food";
        }  
    }
?>