<?php

/*

	A cookie is often used to identify a user. A cookie is a small file that the server embeds on the user's computer. 	
	Each time the same computer requests a page with a browser, it will send the cookie too. With PHP, you can both create 	
	and retrieve cookie values.
*/


//A cookie is created with the setcookie() function.

/*
Syntax
setcookie(name, value, expire, path, domain, secure, httponly);
Only the name parameter is required. All other parameters are optional.

*/

//The time() function returns the current time in the number of seconds since the Unix Epoch (January 1 1970 00:00:00 GMT).


    
    //setcookie("customerId", "1234", time() + 60 * 60 * 24);

    setcookie("customerId", "test", time() - 60 * 60);

    // $_COOKIE["customerId"] = "test";

    echo $_COOKIE["customerId"];

?>