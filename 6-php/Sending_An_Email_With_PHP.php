//this shows how to send emails using php 
//More Info:http://www.velvetblues.com/web-development-blog/avoid-spam-filters-with-php-mail-emails/

<?php

    $emailTo = "xaviernara19@gmail.com";

    $subject = "TEST EMAIL!";

    $body = "I think you're great and the email was sent";

	//NOTICE:Theres only one header and it most likely not be send becuase theres not more headers to give more info
	//and if it is sent it will be probably be sent to the Spam folder
	//More info:https://stackoverflow.com/questions/5935087/how-do-i-prevent-mails-sent-through-php-mail-from-going-to-spam
    $headers = "From: xarichar@pnw.edu";

	//returns either a 1 or 0 depending on whether or not the email was successful.
    if (mail($emailTo, $subject, $body, $headers)) {
        
        echo "The email was sent successfully";
        
    } else {
        
        echo "The email could not be sent.";
        
    }


?>


