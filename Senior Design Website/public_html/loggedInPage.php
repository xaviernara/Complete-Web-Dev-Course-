<?php

	session_start();

	if (array_key_exists("id", $_COOKIE)){
    
    
    	$_SESSION['id'] = $_COOKIE['id'];
    }

	if (array_key_exists("id", $_SESSION)){
    
    
    	echo "<p>Logged In! <a href='index.php?logout=1'>Log Out</a></p>";
    }

	else{
    
    	header ("Location: index.php");
    }

	include("htmlFromIndex.php"); 

	include("javascriptFromIndex.php"); 
 
?>

<?php
	include("mySQLConnection.php");
	$studentId = $_POST['studentId'];
	$studentName = $_POST['studentName'];
	$instructorClasses = $_POST['instructorClasses'];

	$error = "";

//FIX MYSQL CONNECTION FOR STUDENTS INFO TABLE
	
	//echo $studentName;
	//echo $instructorClasses;

	//if (array_key_exists('studentId',$_POST) AND array_key_exists('studentName',$_POST) AND array_key_exists('instructorClasses',$_POST) ){

/*
 	$query = "INSERT INTO `StudentsInfo` (`id`, `fullName`) VALUES ('".mysqli_real_escape_string($link, $_POST['studentId'])."', '".mysqli_real_escape_string($link, $_POST['studentName'])."')";
      
	$display=mysql_query("SELECT id,fullName FROM StudentsInfo WHERE id='".mysqli_real_escape_string($link, $_POST['studentId'])"'");
      
      
  */    
    
    	//echo "sTDUENT ID: ",$studentId;
   // }
/*
	while($result = mysql_fetch_array($display, MYSQL_ASSOC)){
      
      echo "<br/>Student Id: ",$result['studentId'];
      echo "<br/>Student Name: ",$result['studentName'];

       if (!mysqli_query($link, $query)) {

           $error = "<p>There was a problem signing you up - please try again later.</p>";

       }

    }
*/
	if (array_key_exists('studentName',$_POST)){
    
    	echo "<p>Student name: </p> ",$studentName;
    }
	if (array_key_exists('instructorClasses',$_POST)){
    
    	echo "<p>Instructor Classes: </p> ",$instructorClasses;
    }
	if (array_key_exists('studentId',$_POST)){
    
    	echo "<p>student Id: </p> ",$studentId;
    }
	
	
	





?>


<form method = "post" id = "studentAddForm" >
              
              <p> Add Students Profile & Classes to the Database</p>
              
              <fieldset class="form-group">

                <input class="form-control" name="studentName" type="text" placeholder="Student's Full Name">

              </fieldset >

               <fieldset class="form-group">

                   <input class="form-control" name="studentId" type="text" placeholder="Student's Id">

               </fieldset>
  
  				<fieldset class="form-group">

                   <input class="form-control" name="instructorClasses" type="text" placeholder="Add Class">

               </fieldset>
  
              <fieldset class="form-group">

                    <input class="btn btn-success" type="submit" name ="submit" value = "Update Database">

              </fieldset>

            </form>
