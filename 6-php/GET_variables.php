<?php
//More info:http://w3schools.sinsixx.com/php/php_get.asp.htm
//The $_GET variable is an array of variable names and values sent by the HTTP GET method.
/*
The $_GET variable is used to collect values from a form with method="get". 
Information sent from a form with the GET method is visible to everyone (it will be displayed in the browser's address bar) 
and it has limits on the amount of information to send (max. 100 characters).
*/


//GET VARIABLES get the user input thats in the url and lets you manipulate them 

//this determines if the user's numeric input is prime or not by using GET variables

//the 1st if statement tests if the input is numeric, >0, when rounded has zero decimal points 
   if(is_numeric($_GET['number']) && $_GET['number'] > 0 && $_GET['number'] == round($_GET['number'], 0)){
        
        $i = 2;
        
        $isPrime = true;
        
	//while the input's remainder is equal to 0 then it'll keep iterating 
        while ($i < $_GET['number']) {
            
	    //if the input divided by 2's remainder is equal to 0 then it's not prime 
            if ($_GET['number'] % $i == 0) {
                
                // Number is not prime!
                
                $isPrime = false;
                
            }

            $i++;
            
        }
        
	//if its prime then the number will be displayed on the screen
	//else a its not prime message will be displayed
        if ($isPrime) {
            
            echo "<p>".$i." is a prime number!</p>";
            
        } else {
            
            echo "<p>".$i." is not prime.</p>";
            
        }  
        
    } else if ($_GET) {
        
        // User has submitted something which is not a positive whole number
	//(ie a string)
        
        echo "<p>Please enter a positive whole number.</p>";
        
    }

?>

//HTML IS WRITTEN OUTSIDE THE PHP 
//this is html is to get numeric input from the user and using the GET variables in php you can manipulate the input 
<p>Please enter a whole number.</p>

//the default of form is GET
<form method ="get">

    <input name="number" type="text">
    
    <input type="submit" value="Go!">
    
</form>
