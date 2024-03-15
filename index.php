
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <form action="index.php" method="get">
        <label>username: </label><br>
        <input type="text" name="username" id=""><br>
        <label>password: </label><br>
        <input type="password" name="password" id=""><br>
        <input type="submit" value="submit">
    </form>
</body>
</html>
<?php
    echo "{$_GET["username"]} <br>";
    echo "{$_GET["password"]} <br>" ;
?>