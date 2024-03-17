<?php 
   //array
    $friends= array("Kevin", "Karen", "Oscar", "Jim");
    array_push($friends, "Angela", "Pam");
    // array_pop($friends);
    // array_shift($friends);
    $reversedFriends = array_reverse($friends);


    foreach($reversedFriends as $friend){
        echo $friend . "<br>";
    }

    echo count($friends);
?>