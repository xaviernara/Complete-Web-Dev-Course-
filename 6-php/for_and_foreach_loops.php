<?php

$family = array("Rob", "Kirsten", "Tommy", "Ralphie");

//for each loop 
foreach ($family as $index => $value) {
    
    //appends " Percival" to the end of each element 
    $family[$index] = $value." Percival";
    
    //displays the index and value of the array
    echo "Array item ".$key." is ".$value."<br>";
    
}


//for loop that iterates thru the array and displays it
for ($i = 0; $i < sizeof($family); $i++) {
    
    echo $family[$i]."<br>";
    
}


//for loop that iterates backwards thru the array and displays it
for ($i = 10; $i >= 0; $i--) {
    
    echo $i."<br>";
    
}


?>