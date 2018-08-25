

<?php

	/*
		When you work with an application, you open it, do some changes, and then you close it. This is much like a Session. The computer knows who you are. It knows when you start the application and when you end. 
		But on the internet there is one problem: the web server does not know who you are or what you do, because the HTTP address doesn't maintain state.
		Session variables solve this problem by storing user information to be used across multiple pages (e.g. username, favorite color, etc). By default, session variables last until the user closes the browser.
		So; Session variables hold information about one single user, and are available to all pages in one application.	
	*/

	/*
		A session is started with the session_start() function.
		Session variables are set with the PHP global variable: $_SESSION.
		
		More Info: https://www.w3schools.com/php/php_sessions.asp
	*/

	
	//Basically this allows for a user to input a email and password and its be saved if the user changes the website
	//once saved then the user will be sent to another website 
	//(EX: when your already logged into facebook and leave the website and come back and your still logged in )
	//(ie your session hasn't ended)
    session_start();

	
	//refer to Looping_through_data for comments about the if/else statements in more detail
    if (array_key_exists('email', $_POST) OR array_key_exists('password', $_POST)) {
        
        $link = mysqli_connect("localhost", "cl29-users-bzh", "YTTMcfhK.", "cl29-users-bzh");

            if (mysqli_connect_error()) {
        
                die ("There was an error connecting to the database");
        
            } 
        
        
        if ($_POST['email'] == '') {
            
            echo "<p>Email address is required.</p>";
            
        } else if ($_POST['password'] == '') {
            
            echo "<p>Password is required.</p>";
            
        } else {
            
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
                
				//if the insertion was successful then the user's email is saved in the session (ie their info is in the database)
				//and the user is sent to another website
                if (mysqli_query($link, $query)) {
                    
                    $_SESSION['email'] = $_POST['email'];
                    
					/*
					The header() function sends a raw HTTP header to a client.
					It is important to notice that header() must be called before any actual output is sent 
					
					header(string,replace,http_response_code)
					
					string		Required. Specifies the header string to send
					replace		Optional. Indicates whether the header should replace previous or add a second header. Default is TRUE (will replace). FALSE (allows multiple headers of the same type)
					http_response_code	Optional. Forces the HTTP response code to the specified value (available in PHP 4.3 and higher)		
					*/
				
                    header("Location: session.php");
                    
                } else {
                    
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