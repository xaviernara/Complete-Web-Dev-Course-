<?php
//this details one of the most common ways to connect to a mysql database from the server 
//and how to check for errors connecting the 2 
//More info:https://www.w3schools.com/php/func_mysqli_connect.asp
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
    mysqli_connect("localhost","my_user","my_password","my_db");

	//if the php cant connect to a database a error message will be displayed 
	//else the connection was successful
    if (mysqli_connect_error()) {
        
        echo "There was an error connecting to the database";
        
    } else {
        
        echo "Database connection successful!";
        
    }


?>