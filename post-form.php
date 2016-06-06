<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: the Moon'; 
    $to = 'laura.hilliger@greenpeace.org'; 
    $subject = 'Hello from the Moon';
    $human = $_POST['human'];
			
    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
				
    if ($_POST['submit'] && $human == '11') {				 
        if (mail ($to, $subject, $body, $from)) { 
	    echo '<p>Your message has been sent! <a href="http://moon.greenpeace.org">Head back to the Moon</a>.</p>';
	} else { 
	    echo '<p>Something went wrong, go back and try again!</p>'; 
	} 
    } else if ($_POST['submit'] && $human != '11') {
	echo '<p>You answered the anti-spam question incorrectly!</p>';
    }
?>