<?php
	/*
		The array_key_exists() function checks an array for a specified key, and returns true if the key exists and false if the key does not exist.
		*TIP: Remember that if you skip the key when you specify an array, an integer key is generated, starting at 0 and increases by 1 for each value. 
		
		Syntax: array_key_exists(key,array)
		
		key		Required. Specifies the key
		array	Required. Specifies an array
		
		More Info:https://www.w3schools.com/php/func_array_key_exists.asp
	*/



	//array_key_exists : checks to see if the POST variables (ie array) have anything entered anything into them from the user
    if (array_key_exists('email', $_POST) OR array_key_exists('password', $_POST)) {
        
        $link = mysqli_connect("shareddb1b.hosting.stackcp.net", "cl29-users-bzh", "YTTMcfhK.", "cl29-users-bzh");

            if (mysqli_connect_error()) {
        
                die ("There was an error connecting to the database");
        
            } 
        /*
		 The mysqli_real_escape_string() function escapes special characters in a string for use in an SQL statement
		 Syntax: mysqli_real_escape_string(connection,escapestring);
		
		 connection		Required. Specifies the MySQL connection to use
		 escapestring	Required. The string to be escaped. Characters encoded are NUL (ASCII 0), \n, \r, \, ', ", and Control-Z.
		
		 *MANDATORY TO PREVENT AGAINST SQL INJECTIONS FROM USERS and WHEN YOUR TESTING DB AGAINST STRINGS FROM USERS 
		 OR ANOTHER LANGUAGE (read above description)
		 
		 More Info:https://www.w3schools.com/php/func_mysqli_real_escape_string.asp
		 
		*/
		
		
		
		
		
        //The 1st if and else if checks to see if the user has entered anything into the email and password input forms
        if ($_POST['email'] == '') {
            
            echo "<p>Email address is required.</p>";
            
        } else if ($_POST['password'] == '') {
            
            echo "<p>Password is required.</p>";
            
        } 
		
		//this else query's the database to test if the email input matches a email in the database
		else {
            
            $query = "SELECT `id` FROM `users` WHERE email = '".mysqli_real_escape_string($link, $_POST['email'])."'";
            
            $result = mysqli_query($link, $query);
			
            //this if checks the database to test if the email input matches a email in the database and displays a error message
			//basically if theres more than 1 of the email in the db then theres a error displayed
            if (mysqli_num_rows($result) > 0) {
                
                echo "<p>That email address has already been taken.</p>";
                
            } 
			
			//else the user's email and password input is inserted into the database if no matches have been found in the database
			else {
                
                $query = "INSERT INTO `users` (`email`, `password`) VALUES ('".mysqli_real_escape_string($link, $_POST['email'])."', '".mysqli_real_escape_string($link, $_POST['password'])."')";
                
				//if the insertion was successful then the user is signed up (ie their info is in the database)
                if (mysqli_query($link, $query)) {
                    
                    echo "<p>You have been signed up!";
                    
                } 
				
				//else there was a issue
				else {
                    
                    echo "<p>There was a problem signing you up - please try again later.</p>";
                    
                }
                
            }
            
        }
        
        
    }

    


?>


<form method = "post">

    <input name="email" type="text" placeholder="Email address">
    
    <input name="password" type="password" placeholder="Password">
    
    <input type="submit" value = "Sign up">

</form>