<?php

$myArray = array("Rob", "Kirsten", "Tommy", "Ralphie");

$myArray[] = "Katie";

//this is how to print out the whole array 
//print_r = print readable
print_r($myArray);

echo $myArray[3];

//you can write html in php as wellto edit output
echo "<br><br>";

//adding elements to the array
$anotherArray[0] = "pizza";

$anotherArray[1] = "yoghurt";

$anotherArray[5] = "coffee";


//this names the index of the element "ice cream" to "myFavouriteFood"
$anotherArray["myFavouriteFood"] = "ice cream";

print_r($anotherArray);

echo "<br><br>";

//this a faster way to add names to the indexs of the elements
$thirdArray = array(
    
    "France" => "French", 
    "USA" => "English", 
    "Germany" => "German");

//unset removes a element from a array at a specfic index
unset($thirdArray["France"]);

print_r($thirdArray);

//this gives the size of the array
echo sizeof($thirdArray);


?>