<?php
    //string
    $name = "John";
    $age = 25;
    $price= 20.5;
    $rate= 0.5;

    $food= "pizza";
    $quantity= 4;
    $food_cost= 12.75;
    $total_cost= $quantity * $food_cost;

    $employed= true;
    $for_sale= false;

    echo "hello {$name}! <br> ";
    echo "You are {$age} years old. <br>";
    echo "my headphone price is \${$price} <br>";
    echo "sales tax rate is {$rate}% <br>";

    if($employed){
        echo "You are employed <br>";
    }else{
        echo "You are unemployed <br>";
    }

    if($for_sale){
        echo "The item is for sale <br>";
    }else{  
        echo "The item is not for sale <br>";
    }   

    echo "you have ordered {$quantity}X {$food} <br>";
    echo "total pizza cost is \${$total_cost} <br>"
?>