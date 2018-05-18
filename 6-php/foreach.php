<?php

$summer = array("Hot", "Sunnny", "Beach-y", "Grilling-ish");

foreach ($summer as $key => $value) {

    echo "Array item ".$key." is ".$value."<br>";

    $summer[$key] = $value." weather";
}

for ($i = 0; $i < sizeof($summer); $i++) {

echo $summer[$i]."<br>";

}


?>