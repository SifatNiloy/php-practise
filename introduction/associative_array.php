<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="text" name="country"> <br>
        <input type="submit" >
    </form>
</html>

<?php
//    //associative array
    
    $capitals= array("France"=>"Paris", "Germany"=>"Berlin", "USA"=>"Washington DC", "England"=>"London", "China"=>"Beijing", "Russia"=>"Moscow", "Australia"=>"Canberra", "Canada"=>"Ottawa", "India"=>"New Delhi", "Brazil"=>"Brasilia", "Pakistan"=>"Islamabad", "Nigeria"=>"Abuja", "South Africa"=>"Cape Town", "Argentina"=>"Buenos Aires", "Egypt"=>"Cairo", "Indonesia"=>"Jakarta");

    // $capital = $capitals[$_POST["country"]];
    // echo $capital ;

    // echo $capitals["France"];

    // $capitals= array_flip($capitals);

    // foreach($capitals as $country => $capital){
    //     echo "The capital of $country is $capital <br>";
    // }

    // $keys = array_keys($capitals);
    // foreach($keys as $key){
    //     echo $key . "<br>";
    // }

    // $values = array_values($capitals);
    // foreach($values as $value){
    //     echo $value . "<br>";
    // }

    // Check if the form is submitted
    if(isset($_POST["country"])) {
        // Get the submitted country name
        $country = $_POST["country"];
        // Check if the country exists in the array
        if(array_key_exists($country, $capitals)) {
            // Get the capital of the country
            $capital = $capitals[$country];
            // Display the capital
            echo "The capital of $country is $capital";
        } else {
            // If the country does not exist in the array
            echo "The country does not exist in the array";
        }
    }
?>

