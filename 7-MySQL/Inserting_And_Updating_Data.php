<?php

    $link = mysqli_connect("localhost","my_user","my_password","my_db");

    if (mysqli_connect_error()) {
        
        die ("There was an error connecting to the database");
        
    } 

	//this inserts the VALUES 'tommy@gmail.com', 'ilovemydad' into the columns email and password
    // $query = "INSERT INTO `users` (`email`, `password`) VALUES('tommy@gmail.com', 'ilovemydad')";

	//this UPDATES the db column password item WHERE the column email  has 'example@gmail.com' in the row 
	//and LIMITS the UPDATE to 1 so all the elements in the password column aren't changed
    $query = "UPDATE `users` SET password = 'uedjUFH7^%' WHERE email = 'example@gmail.com' LIMIT 1";

    mysqli_query($link, $query);

    $query = "SELECT * FROM users";

    if ($result = mysqli_query($link, $query)) {
		
        //this refers to each row of the database
        $row = mysqli_fetch_array($result);
        	/*
		Database:
			[username]:myUserName
			[email]: email@gmail.com
			[password]:myPassword
		*/
		
		
        echo "Your email is ".$row[1]." and your password is ".$row[2];
        
    }


?>