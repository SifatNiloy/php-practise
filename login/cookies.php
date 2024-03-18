<?php
    setcookie("fav_food", "pizza", time() + 86400, "/");
    setcookie("fav_color", "blue", time() + 86400, "/");
    setcookie("fav_animal", "cat", time() + 86400, "/");

    foreach ($_COOKIE as $key => $value) {
        echo $key . " " . $value . "<br>";
    }

    if(isset($_COOKIE['fav_food'])){
        echo "Your favourite food is " . $_COOKIE['fav_food'];
    }else{  
        echo "Cookie not set";
    }
?>