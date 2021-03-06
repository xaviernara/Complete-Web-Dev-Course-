<?php
	//$username = mysqli_real_escape_string($link, $_POST['username']);


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

	$error= "";
///////////////////////////////////////////////////////////////////////////////////////
	//this if/if else checks if the user is logged in and keeps the user in the logged in page

	//if the "logout" id exists then the user wants to log out or their already logged out
	//(ie deletes their session and cookie and makes their id empty for later use)
	if (array_key_exists("logout", $_GET)){
    
    	unset($_SESSION);
      	setcookie("id","", time()-60*60);
      	$_COOKIE["id"]= "";
		
		session_destroy();
    
    }

	//else if they still have their id saved in the cookie and session then they will be directed to loggedInPage.php
	else if ((array_key_exists("id", $_SESSION) AND $_SESSION['id']) OR (array_key_exists("id", $_COOKIE) AND $_COOKIE['id'])){
    
    	header("Location: loggedInPage.php");
        //header("Location: nextpage.php");
      
    }
///////////////////////////////////////////////////////////////////////////

	//refer to Looping_through_data.php in the drive for comments about the if/else statements in more detail
    //if (array_key_exists('email', $_POST) OR array_key_exists('password', $_POST)) {
    if (array_key_exists("submit", $_POST)) {  
      
		//the file has the mysql db connection code on it and it's included so the database name/password isn't visible 
        include("mySQLConnection.php");
        
		
        if ($_POST['email'] == '') {
		//if (!$_POST['email']) {
            
            $error.= "<p>Email address is required.</p>";            
        } 
		
		//The FILTER_VALIDATE_EMAIL filter validates an e-mail address
		//if the email input doesn't matches the email format then a error is displayed      
        else if ($_POST['email'] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false) {
            
            $error .= "<p>The email address is invalid.</p>";
          	//echo "<p>The email address is invalid.</p>";
            
        }
		
		if ($_POST['password']='') {
		//if (!$_POST['password']) {
            
            $error .= "A password is required<br>";
            
        } 
		
		if ($_POST['full_name']=''){
		//if (!$_POST['full_name']){
			$error.=  "Full name is required.<br>";
		}
		
		if ($_POST['username']='') {	
		//if (!$_POST['username']) {			
			$error.=  "Username is required.<br>";
		}
		
		if ($_POST['courseName']=='') {
		//if (!$_POST['courseName']) {
			$error.=  "Course Name is required. (e.g. ECE 456)<br>";
			
		}
		
		if ($_POST['courseID']='') {
		//if (!$_POST['courseID']) {
			$error.=  "Course ID is required. (e.g. 456)<br>";
		}
		
		if ($error != "") {
            
            $error = "<p>There were error(s) in your form:</p>".$error;
            
        }
      /*
      //The FILTER_VALIDATE_EMAIL filter validates an e-mail address
   	 //if the email input doesn't matches the email format then a error is displayed      
        else if ($_POST['email'] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false) {
            
            $error .= "<p>The email address is invalid.</p>";
          	//echo "<p>The email address is invalid.</p>";
            
        }
      
       //else if ($_POST['password'] == '') {
		else if (!isset($_POST['password'])) {
            
            $error.=  "<p>Password is required.</p>";
            //echo  "<p>Password is required.</p>";
        }
      
      //else if ($_POST['full_name'] == '') {
		else if (!isset($_POST['full_name']) ) {
            
            $error.=  "<p>Full name is required.</p>";
        	//echo  "<p>Full name is required.</p>";
            
        }
		//else if ($_POST['username'] == '') {
		else if (!isset($_POST['username']) ){            
			$error.=  "<p>Username is required.</p>";
            //echo "<p>Username is required.</p>";
        }
		//else if ($_POST['courseName'] == '') {
		else if (!isset($_POST['courseName'])){
            
            $error.=  "<p>Course Name is required. (E.g. ECE 456)</p>";
            //echo "<p>Course Name is required. (E.g. ECE 456)</p>";
        } 
		//else if ($_POST['courseID'] == '') {
		else if (!isset($_POST['courseID'])){
            
             $error.=  "<p>Course ID is required. (E.g. ECE 456)</p>";
              //echo "<p>Course ID is required. (e.g. ECE 456)</p>";
        } 
		*/
      
      	else {
            
          if($_POST['signUp']=='1'){
          
            $query = "SELECT `id` FROM `Professors` WHERE email = '".mysqli_real_escape_string($link, $_POST['email'])."' LIMIT 1";
            
            $result = mysqli_query($link, $query);
            //this if checks the database to test if the email input matches a email in the database and displays a error message
			//basically if theres more than 1 of the email in the db then theres a error displayed
            if (mysqli_num_rows($result) > 0) {
                
                 $error.= "That email address has already been taken.";
                
            } 
			
			//else the user's email and password input is inserted into the database if no matches have been found in the database
			else {
                
                              //$query = "INSERT INTO `users` (`email`, `password`) VALUES ('".mysqli_real_escape_string($link, $_POST['email'])."', '".mysqli_real_escape_string($link, $_POST['password'])."')";
              //$query = "INSERT INTO `Professors` (`email`, `password`,`fullname`,`username`) VALUES ('".mysqli_real_escape_string($link, $_POST['email'])."', '".mysqli_real_escape_string($link,$_POST['password'])."','".mysqli_real_escape_string($link, $_POST['full_name'])."','$username')";
              $query = "INSERT INTO `Professors` (`email`, `password`,`fullname`,`username`) VALUES ('".mysqli_real_escape_string($link, $_POST['email'])."', '".mysqli_real_escape_string($link,$_POST['password'])."','".mysqli_real_escape_string($link, $_POST['full_name'])."','".mysqli_real_escape_string($link, $_POST['username'])."')";
              
              //$query2 = "INSERT INTO `Course` (`courseID`,`courseName`,`professorID`) VALUES('".mysqli_real_escape_string($link, $_POST['courseID'])."', '".mysqli_real_escape_string($link, $_POST['courseName'])."','".mysqli_real_escape_string($link, $_POST['username'])."')";
				//$query = "INSERT INTO `Course` (`courseID`,`courseName`,`professorID`) VALUES('".mysqli_real_escape_string($link, $_POST['courseID'])."', '".mysqli_real_escape_string($link, $_POST['courseName'])."','$username')";
			  $query = "INSERT INTO `Course` (`courseID`,`courseName`,`professorID`) VALUES('".mysqli_real_escape_string($link, $_POST['courseID'])."', '".mysqli_real_escape_string($link, $_POST['courseName'])."','".mysqli_real_escape_string($link, $_POST['username'])."')";

              
                
				//if the insertion of the user's email, passeword and full name wasn't successful the a error message is displayed
               //else the user's email is saved in the session (ie their info is in the database)
				//and the user is sent to another website
                //if (!mysqli_query($link, $query) || !mysqli_query($link, $query2) ) {
              	if (!mysqli_multi_query($link, $query) ) {
                    
                   $error = "<p>There was a problem signing you up - please try again later.</p>";
                   echo("<p>Error description: </p>" . mysqli_error($link));
              	   echo("<p>Error Number: </p>". mysql_errno($link));
                  
                  
                  //$_SESSION['email'] = $_POST['email'];
                    
					/*
					The header() function sends a raw HTTP header to a client.
					It is important to notice that header() must be called before any actual output is sent 
					
					header(string,replace,http_response_code)
					
					string		Required. Specifies the header string to send
					replace		Optional. Indicates whether the header should replace previous or add a second header. Default is TRUE (will replace). FALSE (allows multiple headers of the same type)
					http_response_code	Optional. Forces the HTTP response code to the specified value (available in PHP 4.3 and higher)		
					*/
				
                    //header("Location: sessions.php");
                    
                } else {
                    
                  	//refer to storing_passwords_securely.php in the drive for comments about this line of code about securing passwords 
                  	$query = "UPDATE `Professors` SET password = '".md5(md5(mysqli_insert_id($link)).$_POST['password'])."' WHERE id = ".mysqli_insert_id($link)." LIMIT 1";
                  
					$id = mysqli_insert_id($link);
				  
                  	mysqli_query($link,$query);
                  
                  //saving the user who was successfully logged in's id in a session so they wont be forgotten when the page is reloaded
                  //$_SESSION['id'] = mysql_insert_id($link);
				  
					$_SESSION['id'] = $id;
                  
                  //checking to see if the user have requested to stay logged in by checking the  "stay logged in" checkbox
					if($_POST['stayLoggedIn'== '1']){
                    	//setcookie("id",mysqli_insert_id($link),time()+60*60*24*365);
                	
						setcookie("id", $id, time() + 60*60*24*365);
					}
                  
               
               // echo "sign up successful";
                    header("Location: loggedInPage.php");
                  //header("Location: loggedInPage.php?username=mysqli_real_escape_string($link, $_POST['username'])");
                  //header("Location: nextpage.php");
            }
            
        }
        
    }
          
      else {
      
      	   //print_r($_POST);
         //$query = "SELECT `id` FROM `Professors` WHERE email = '".mysqli_real_escape_string($link, $_POST['email'])."'";
		$query = "SELECT * FROM `Professors` WHERE email = '".mysqli_real_escape_string($link, $_POST['email'])."'";
		
         $result = mysqli_query($link,$query);
        
         $row = mysqli_fetch_array($result);
        
        	if(isset($row)){
            	
				//$hashedPassword = md5(md5(mysql_insert_id($link)).$_POST['password']);
				$hashedPassword = md5(md5($row['id']).$_POST['password']);
			  
                  if($hashedPassword == $row['password']){

                      $_SESSION['id'] = $row['id'];


                           //checking to see if the user have requested to stay logged in by checking the  "stay logged in" checkbox
                      //if($_POST['stayLoggedIn'== '1']){
						if (isset($_POST['stayLoggedIn']) AND $_POST['stayLoggedIn'] == '1') {
							
                          setcookie("id",$row['id'],time()+60*60*24*365);

						}
					header("Location: loggedInPage.php");
                  
                  
           		 }else{
           		     
           		     $error ="That email/password combination could not be found";
           		     
           		 }
                  
                
              }else{
                  
                   $error ="That email/password combination could not be found";
              }
              
              
              	
            
            }
        	
        
      }
        
  }     
?>



<?php 
		//the file has the hmtl/css code on it for the styling of the login/sign up pages and it's included so that theres only php for the 
		//email and password validation on this file 
		include("htmlFromIndex.php"); 
?>

<?php 
		//the file has the hmtl/css code on it for the login/sign up forms and it's included so that theres only php for the 
		//email and password validation on this file 
		include("formsFromIndex.php"); 

?>

<?php 
		//the file has the javascript code on it for the toggling of the login/sign up pages and it's included so that theres only php for the 
		//email and password validation on this file 

	include("javascriptFromIndex.php"); 


?>
      
      
      
 











