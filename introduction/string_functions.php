<?php 
 $usernameMain= "Shefat Hosaain Niloy";
 $phone = "123-456-7890";
// $username= strtolower($usernameMain);
// echo $username ."<br>" ; 
// $username= ucfirst($usernameMain);
// echo $username  ."<br>" ;
// $username= ucwords($usernameMain);
// echo $username  ."<br>";
// $username= strtoupper($usernameMain);
// echo $username  ."<br>";
// $username = trim($usernameMain);
// echo $username  ."<br>";
// $username = ltrim($usernameMain);
// echo $username  ."<br>";
// $username = str_pad($usernameMain, 20, "0");
// echo $username  ."<br>";
// $username = strrev($usernameMain);
// echo $username  ."<br>";
// $username = str_shuffle($usernameMain);
// echo $username  ."<br>";
// $equals= strcmp($username , "abc");
// echo $equals  ."<br>";
// $length = strlen($usernameMain);
// echo $length  ."<br>";
$index= strpos($usernameMain, "S");
echo $index  ."<br>";
$fullname = explode(" ", $usernameMain);
foreach ($fullname as $name) {
    echo $name . "<br>";
}

$phone = str_replace("-", "", $phone);
echo $phone  ."<br>";
?>