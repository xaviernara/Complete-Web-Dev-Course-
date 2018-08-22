<?php
/*
The $_POST Variable. The $_POST variable is an array of variable names and values sent by the HTTP POST method. 
The $_POST variable is used to collect values from a form with method="post". Information sent from a 
form with the POST method is invisible to others and has no limits on the amount of information to send.

Why use $_POST?:
Variables sent with HTTP POST are not shown in the URL
Variables have no length limit

*/

//MORE INFO: http://w3schools.sinsixx.com/php/php_post.asp.htm

//this if statement checks if the user's input matches one of array elements 
//and POST's the message "Hi there ".$_POST['name']."!" 
    if ($_POST) {
        
        $family = array("Rob", "Kirsten", "Tommy", "Ralphie");
        
        $isKnown = false;
        
        foreach ($family as $value) {
            
            if ($value == $_POST['name']) {
                
                $isKnown = true;
                
            }  
            
        }
        
        if ($isKnown) {
            
            echo "Hi there ".$_POST['name']."!";
            
        } else {
            
            echo "I don't know you.";
            
        }      
        
    }


?>


//this creates a input form for the user to input a name and
<form method="post">

    <p>What is your name?</p>
    
    <p><input type="text" name="name"></p>
    
    <p><input type="submit" value="Submit"></p>


</form>
