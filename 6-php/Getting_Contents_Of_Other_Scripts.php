<?php

/*

The include (or require) statement takes all the text/code/markup that exists in the specified file and copies it into the file that uses the include statement.

Including files is very useful when you want to include the same PHP, HTML, or text on multiple pages of a website.

More info: https://www.w3schools.com/php/php_includes.asp

*/

    include("includedfile.php");



/*
	The file_get_contents() reads a file into a string.

This function is the preferred way to read the contents of a file into a string. Because it will use memory mapping techniques, if this is supported by the server, to enhance performance.


*/    

//More  //info:https://www.w3schools.com/php/func_filesystem_file_get_cone//nts.asp


    //this displays the HTML code form this website
    echo file_get_contents("https://www.ecowebhosting.co.uk");

?>