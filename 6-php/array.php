<?php

$myArray = array ("warm", "sun", "heat", "food");

$myArray[] = "garden";

print_r($myArray);

echo $myArray [2];

echo "<br><br>";

$anotherArray[0] = "dog";

$anotherArray[1] = "cat";

$anotherArray[5] = "coffee";

$anotherArray["My favorite drink"] = "coffee";

print_r($anotherArray);

echo "<br><br>";

$thirdArray = array(
    "Summer" => "Warm",
    "Winter" => "Cold", 
    "Fall" => "Cool");

print_r($thirdArray);

unset($anotherArray[5]);

echo ($thirdArray[Winter]);

echo "<br><br>";

echo sizeof($myArray);








?>