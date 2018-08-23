<?php

	//mysqli_connect("localhost","my_user","my_password","my_db");
	//SYNTAX: mysqli_connect(host,username,password,dbname,port,socket);
	/*
		host		Optional. Specifies a host name or an IP address
		user name	Optional. Specifies the MySQL user name
		password	Optional. Specifies the MySQL password
		database name	Optional. Specifies the default database to be used
		port		Optional. Specifies the port number to attempt to connect to the MySQL server
		socket		Optional. Specifies the socket or named pipe to be used
	*/
	//its common that username and database name are the same
	
	
	//$link =connection	to the MySQL database
    $link = mysqli_connect("localhost","my_user","my_password","my_db");

	
	//if the php cant connect to a database a error message will be displayed 
	//and the program will end 
	//"die" = "break" 
    if (mysqli_connect_error()) {
        
        die ("There was an error connecting to the database");
        
    } 
	//by using query you can write MySQL code access the contents of the database
	//A query is a request for data or information from a database table or combination of tables.
    $query = "SELECT * FROM users";

	//The mysqli_query() function performs a query against the database.
	//Syntax: mysqli_query(connection,query,resultmode);
	/*
		connection	Required. Specifies the MySQL connection to use
		query	Required. Specifies the query string
		resultmode	Optional. A constant. Either:
					MYSQLI_USE_RESULT (Use this if we have to retrieve large amount of data)
					MYSQLI_STORE_RESULT (This is default)
	*/
	//if theres a connection to the database and the query is 
    if ($result = mysqli_query($link, $query)) {
        //this refers to each row of the database
        $row = mysqli_fetch_array($result);
        
		/*Database:
			[username]:myUserName
			[email]: email@gmail.com
			[password]:myPassword
		
		*/
        echo "Your email is ".$row[1]." and your password is ".$row[2];
        
    }


?>