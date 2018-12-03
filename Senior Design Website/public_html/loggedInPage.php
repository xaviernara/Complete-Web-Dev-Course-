<?php

session_start();

if (array_key_exists("id", $_COOKIE)) {


    $_SESSION['id'] = $_COOKIE['id'];
}

if (array_key_exists("id", $_SESSION)) {


    echo "<p> In! <a href='index.php?logout=1'>Log Out</a></p>";
} else {

    //header("Location: index.php");
	header("Location: index2.php");
}

include("htmlFromIndex.php");

include("javascriptFromIndex.php");

include("navbar.php");
?>


<?php
include("mySQLConnection.php");
include("formsFromLoggedIn.php");

//$studentId = mysqli_real_escape_string($link, $_POST['studentId']);
//$studentName = mysqli_real_escape_string($link, $_POST['studentName']);
//$instructorClasses = mysqli_real_escape_string($link, $_POST['instructorClasses']);
//$courseID = mysqli_real_escape_string($link, $_POST['courseID']);

//$error = "";

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

// Min value
$min = 0;
// Max value
$max = 10;

//refer to Looping_through_data.php in the drive for comments about the if/else statements in more detail
if (array_key_exists('studentName', $_POST) OR array_key_exists('studentId', $_POST) OR array_key_exists('instructorClasses', $_POST)) {
//if (!isset($_POST['studentName']) OR !isset($_POST['studentId']) OR !isset($_POST['instructorClasses'])) {
    //if( isset( $_POST['UpdateDatabase'] )){

    //the file has the mysql db connection code on it and it's included so the database name/password isn't visible
    include("mySQLConnection.php");
    echo "inside 1";

    //echo "<br/>Student Id: ",$_REQUEST['studentId'];
    //echo "<br/>Student Name: ",$_REQUEST['studentName'];

    //echo "<br/>Student Id: ",$result['studentId'];
    //echo "<br/>Student Name: ",$result['studentName'];

    if ($_POST['studentName'] == '') {

        //$error.= "<p>Student Name is required.</p>";
        echo "<p>Student Name is required.</p>";


    } else if ($_POST['studentId'] == '') {

        //$error.= "<p>Student ID is required.</p>";
        echo "<p>Student ID is required.</p>";

    } /*
		else if (filter_var($_POST['studentId'], FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max)))=== false) {
    		echo("<p>Student ID is not within the legal range</p>");
		} 
    */
    else if ($_POST['instructorClasses'] == '') {

        //$error.= "<p> Instructor Classes is required.</p>";
        echo "<p> Instructor Class is required.</p>";

    }


}else {

    //echo "inside 2";
//echo "<br/>Student Id: ",$_REQUEST['studentId'];
//echo "<br/>Student Name: ",$_REQUEST['studentName'];
//echo "<br/>Student Id: ",$result['studentId'];
//echo "<br/>Student Name: ",$result['studentName'];


//if($_POST['updateDatabase']=='1'){
//if(isset($_POST["UpdateDatabase"])){
    if (isset($_POST["UpdateDatabase"])) {

        //include("mySQLConnection.php");

        //$query = "SELECT `id` FROM `StudentsInfo` WHERE fullName = '" . mysqli_real_escape_string($link, $_POST['studentName']) . "'";

        //$result = mysqli_query($link, $query);
        //this if checks the database to test if the student name input matches a student name in the database and displays a error message
        //basically if theres more than 1 of the student name in the db then theres a error displayed
        //if (mysqli_num_rows($result) > 0) {

            //$error.= "<p>That student has already been added to the database.</p>";
            //echo "<p>That student has already been added to the database.</p>";

        //} //else the user's class, student id and student name is inserted into the database if no matches have been found in the database
       // else {
            //echo "inside 3";
            //$query = "INSERT INTO `StudentsInfo` (`id`, `fullname`,`instructorClasses`) VALUES ('".mysqli_real_escape_string($link, $_POST['studentId'])."', '".mysqli_real_escape_string($link, 	$_POST['studentName'])."','".mysqli_real_escape_string($link, $_POST['instructorClasses'])."')";
            //include("mySQLConnection.php");
            //$query = "INSERT INTO `StudentsInfo` (`Studentsid`, `fullname`,`instructorClasses`) VALUES 	 ('" . mysqli_real_escape_string($link, $_REQUEST['studentId']) . "','" . mysqli_real_escape_string($link, $_REQUEST['studentName']) . "','" . mysqli_real_escape_string($link, $_REQUEST['instructorClasses']) . "')";
            //$query = "INSERT INTO `StudentsInfo` (`PUID`, `fullname`,) VALUES ('" .mysqli_real_escape_string($link, $_POST['studentId'])."','".mysqli_real_escape_string($link, $_POST['studentName'])."')";
      		//$query = "INSERT INTO `StudentsInfo` (`PUID`, `fullname`) VALUES (`$studentId`,`$studentName`)";
      		$query = "INSERT INTO `studentsinfo` (`id`,`fullname`,`PUID`) VALUES (NULL,'".mysqli_real_escape_string($link, $_POST['studentName'])."','".mysqli_real_escape_string($link, $_POST['studentId'])."')";
      
      		//$query = "INSERT INTO `Course` (`courseID`,`courseName`,`professorID`) VALUES(`$courseID`,`$instructorClasses`, ` `)";
            $query = "INSERT INTO `course` (`courseID`,`courseName`,`professorID`) VALUES ('".mysqli_real_escape_string($link, $_POST['courseID'])."','".mysqli_real_escape_string($link, $_POST['instructorClasses'])."', '$username')";
			
      	
      
            if (!mysqli_multi_query($link, $query)) {
      		//if(!$link){
                //$error = "<p>There was a problem updating the datebase - please try again later.</p>";
                //die("<p> Connection failed: </p>".mysqli_connect_error());
              //echo (mysql_errno($link) . ": " . mysql_error($link) . "\n");
              //die('<p>Could not connect: </p>' . mysql_errno());
				//die(mysql_error());
              echo("<p>Error description: </p>" . mysqli_error($link));
              echo("<p>Error Number: </p>". mysql_errno($link));
            }
            //}

        //}
    }
}

if (isset($_POST["ViewClasses"])) {
	
	//this query select the course name form the db based on the user thats logged in 
	$query = "SELECT `courseName` FROM `course` WHERE `professorID` = `$username` ";
	$result = mysqli_query($link, $query);
	print_r (mysqli_fetch_row($result));
	
}

if (isset($_POST["ViewStudents"])) {
	//query selects the students full name, puid, date they attended, and their attendance for those days  
	//based on if puid in both the attedance_lessons and studentsinfo match
	
	$query = "SELECT DISTINCT studentsinfo.fullName,studentsinfo.PUID, attendance_lessons.date, attendance_lessons.attendance FROM studentsinfo INNER JOIN attendance_lessons on studentsinfo.PUID = attendance_lessons.PUID";
	$result = mysqli_query($link, $query);
	
	if (mysqli_num_rows($result)>0){
		
		while ($row = mysqli_fetch_row($result)){
			echo "<font color ="black"> Name: " .$row["fullName"]. "PUID: " .$row["PUID"]. "Date" . $row["date"] . "Attendance: " . $row["attendance"]. "</font> <br>"
			
		}
		
	}
	/*
	if(!mysql_query($query,$link)){
		 echo("<p>Error description: </p>" . mysqli_error($link));
         echo("<p>Error Number: </p>". mysql_errno($link));	
	}else{
		print_r (mysql_fetch_row(mysql_query($query,$link)));
	}
	*/
	//$result = mysql_query($query,$link);
	print_r (mysqli_fetch_row($result));
	
}





?>






