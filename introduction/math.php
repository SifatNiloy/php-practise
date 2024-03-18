<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="index.php" method="post">
        <label >x </label>
        <input type="text" name="x" id=""> <br>
        <label >y </label>
        <input type="text" name="y" id=""><br>
        <input type="submit" value="submit">
    </form> -->

    <form action="index.php" method="post">
        <label> radius of circle: </label>
        <input type="text" name="radius" id=""><br>
        <input type="submit" value="result">
    </form>
</body>
</html>



<?php
    // $x= $_POST["x"];
    // $y= $_POST['y'];
    // $absolute= abs($x);
    // $rounded= round($x);
    // echo $rounded ;
    // floor, ceil, max, min, pow, sqrt, pi, rand(lowerlimit, upperlimit), 
    // $total= pow($x, $y);
    // $total= sqrt($x);
    // echo $total;

    $radius= $_POST["radius"];
    $circumference = 2* pi() * $radius;
    $volume= 4/3 * pi() * pow($radius, 3);
    $area = pi() * pow($radius, 2);
    $circumference = round($circumference, 2);
    $volume = round($volume, 2);
    $area = round($area, 2);
    

    echo "The circumference of the circle is {$circumference} <br>";
    echo "The volume of the circle is {$volume} <br>";
    echo "The area of the circle is {$area} <br>";
?>