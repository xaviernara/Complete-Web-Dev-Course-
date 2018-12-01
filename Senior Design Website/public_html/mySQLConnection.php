 
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

  $link = mysqli_connect("shareddb-h.hosting.stackcp.net", "userName-343365c7", "KatekyoReborn19", "userName-343365c7");

			
              if (mysqli_connect_error()) {

                  die ("There was an error connecting to the database".mysqli_connect_error());

              } 

?>