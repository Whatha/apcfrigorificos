<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = $email; 
    $to = 'Apcfrigorificos@hotmail.com'; 
    $subject = 'Nuevo mensaje de página web';
			
    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
				
    if ($_POST['submit']) {				 
        if (mail ($to, $subject, $body, $from)) { 
		    echo '<p>Your message has been sent!</p>';
		} else { 
		    echo '<p>Something went wrong, go back and try again!</p>'; 
		} 
    }
?>