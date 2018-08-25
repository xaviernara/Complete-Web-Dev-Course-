<?php



	// $salt = "isefjfehi2736582KUFED";
	
	/*
		The md5() function calculates the MD5 hash of a string.

		The md5() function uses the RSA Data Security, Inc. MD5 Message-Digest Algorithm.

		From RFC 1321 - The MD5 Message-Digest Algorithm: "The MD5 message-digest algorithm takes as input a message of arbitrary length and produces as output a 128-bit 
		"fingerprint" or "message digest" of the input. The MD5 algorithm is intended for digital signature applications, where a large file must be "compressed" 
		in a secure manner before being encrypted with a private (secret) key under a public-key cryptosystem such as RSA."
	
	*/
	
	/*
	
		Syntax: md5(string,raw)
		
		string	Required. The string to be calculated
		raw	Optional. Specifies hex or binary output format:
		
						TRUE - Raw 16 character binary format
						FALSE - Default. 32 character hex number
	*/
	
	//More Info:https://www.w3schools.com/php/func_string_md5.asp
	

	
	$row['id'] = 73;

	echo md5(md5($row['id'])."password");

?>

//Another way to secure passowrd without the complexity of md5 

<?php
//More Info:http://php.net/manual/en/function.password-hash.php


// Generate a hash of the password "mypassword"
$hash = password_hash("mypassword", PASSWORD_DEFAULT);
 
// Echoing it out, so we can see it:
echo $hash;
 
// Some line breaks for a cleaner output:
echo "<br><br>";
 
// Using password_verify() to check if "mypassword" matches the hash.
// Try changing "mypassword" below to something else and then refresh the page.
if (password_verify('mypassword', $hash)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}
?>


