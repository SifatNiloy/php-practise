<?php
    include("database.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <h2>Registration Form</h2>
        <input type="text" name="user" placeholder="user"><br>
        <input type="password" name="password" placeholder="password"><br>
        <input type="submit" value="Register" name="register">
    </form>
</body>
</html>

<?php
    include("database.php");

    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {
        $user = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
        if(empty($user)){
            echo "user is required";
        } elseif(empty($password)){
            echo "Password is required";
        } else {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO users (user, password) VALUES ('$user', '$hash')";
            if(mysqli_query($conn, $sql)) {
                echo "Registration successful";
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        }
    }
    mysqli_close($conn);
?>
