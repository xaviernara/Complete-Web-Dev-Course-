<?php

   //array of strings
    $family = array("Rob", "Kirsten", "Tommy", "Ralphie");

    $i = 0;

    //this will iterate thru the array and display each element while i < size of the array
    while ($i < sizeof($family)) {
        
        echo $family[$i]."<br>";
        
        $i++;
        
    }




    $i = 1;

//this will add 1 to i and as it iterates then j=i*5 and then display j
    while ($i <= 10) {
        
        $j = $i * 5;
        
        echo $j."<br>";
        
        $i++;
        
    }

?>