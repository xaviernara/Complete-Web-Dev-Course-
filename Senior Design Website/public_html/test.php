<?php
/**
 * Created by PhpStorm.
 * User: xarichar
 * Date: 11/12/2018
 * Time: 7:52 PM
 */
//$link = mysqli_connect("shareddb-h.hosting.stackcp.net", "userName-343365c7", "KatekyoReborn19", "userName-343365c7");

<?php
    $servername = "shareddb-h.hosting.stackcp.net";
    $username = "userName-343365c7";
    $password = "KatekyoReborn19";
    $dbname = "userName-343365c7";

    $studentId = $_POST['studentId'];
$studentName = $_POST['studentName'];
$instructorClasses = $_POST['instructorClasses'];

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = INSERT INTO `StudentsInfo` (`Studentsid`, `fullname`,`instructorClasses`) VALUES('$_POST['studentId'] ',
              ' $POST['studentName']) ',
              '$_POST['instructorClasses']')";
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "New record created successfully";
    }
    catch(PDOException $e)
    {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
?>