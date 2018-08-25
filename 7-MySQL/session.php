<?php

//this the server/website the user is sent to once their info is inserted in the db 
//and their info is saved in the session 
    session_start();
    
	//if the user's info is inside the session and their info is inserted in the db then their logged in 
    if ($_SESSION['email']) {
        
        echo "You are logged in!";
        
    } 
	//else they are sent back to the log in screen
	else {
        /*
			The header() function sends a raw HTTP header to a client.
			It is important to notice that header() must be called before any actual output is sent 
			
			header(string,replace,http_response_code)
			
			string		Required. Specifies the header string to send
			replace		Optional. Indicates whether the header should replace previous or add a second header. Default is TRUE (will replace). FALSE (allows multiple headers of the same type)
			http_response_code	Optional. Forces the HTTP response code to the specified value (available in PHP 4.3 and higher)

		
		*/
        header("Location: index.php");
        
    }
?>
