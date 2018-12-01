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
	include("htmlFromIndex.php"); 
	include("formsFormLoggedIn.php");


?>


<form method = "post" id = "studentAddForm" >
              
              <p> Add Students Profile & Classes to the Database</p>
              
              <fieldset class="form-group">

                <input class="form-control" name="studentName" type="text" placeholder="Student's Full Name">

              </fieldset >

               <fieldset class="form-group">

                   <input class="form-control" name="PUID" type="text" placeholder=" Student PUID">

               </fieldset>
  
  				<fieldset class="form-group">

                   <input class="form-control" name="instructorClasses" type="text" placeholder="Add Class">

               </fieldset>
  
  			   <fieldset class="form-group">

                   <input class="form-control" name="courseID" type="text" placeholder="Course ID">

               </fieldset>
  
  
              <fieldset class="form-group">
                
				<!--	<input type="hidden" name="updateDatabase" value="1">
				-->
                    <input class="btn btn-success" type="submit" name ="UpdateDatabase" value = "UpdateDatabase">

              </fieldset>
  
  			              <fieldset class="form-group">
				<!--	<input type="hidden" name="viewClasses" value="1">
				-->
                    <input class="btn btn-success" type="submit" name ="ViewClasses" value = "ViewClasses">

              </fieldset>
  
  			 <fieldset>
  
  			              <fieldset class="form-group">
				<!--	<input type="hidden" name="viewClasses" value="1">
				-->
                    <input class="btn btn-success" type="submit" name ="ViewClasses" value = "Next Page">

              </fieldset>



            </form>
</form>