<?php

//$ is how php declares variables
$name = "Rob";

echo "<p>My name is $name</p>";

$string1 = "<p>This is the first part";

$string2 = "of a sentence</p>";

echo $string1." ".$string2;

$myNumber = 45;

$calculation = $myNumber * 31 / 97 + 4;

//this is the same as System.out.println("result "+calculation);
echo "The result of the calculation is ".$calculation;

$myBool = false;

echo "<p>This statement is true? ".$myBool."</p>";

//this variable is contains the variable name 
$variableName = "name";

//the 1st $ calls string the variable assigned to the variable
//the 2nd $ calls the contents of the variable name (ie pointer)  
echo $$variableName;

?>