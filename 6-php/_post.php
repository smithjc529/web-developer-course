<?php

   if ($_POST) {

    $food = array("Pizza", "pizza", "Burgers", "burgers", "Salad", "salad", "Tacos", "tacos", "Chocolate", "chocolate", "Ice Cream", "ice cream");

    $isKnown = false;

    foreach ($food as $value) {

        if ($value == $_POST["name"]) {

            $isKnown = true;

        }
    }

    if ($isKnown) {

        echo "My favorite food is " .$_POST["name"]. " too.";

    } else {

        echo "Yuck. I don't like that.";

    }

   } 

?>

<form method="post">

    <p>What is your favorite food?</p>

    <p><input type="text" name="name"></P>

    <p><input type="submit" value="Submit"></p>  

</form>