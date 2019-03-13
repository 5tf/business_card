<?php
  	$email = $_REQUEST['email'];
 	$subject = $_REQUEST['subject'];
  	$comment = $_REQUEST['comment'];
  
  	mail("el.steve.pp@gmail.com", "$subject", $comment, "From:" . $email);
	?>