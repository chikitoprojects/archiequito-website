<?php

if($_GET['process']){
	$to      = 'archie.quito@yahoo.com';
	$subject = '[Web]FW : Web Portfolio ';
	$message = '<html>
				  <body bgcolor="#DCEEFC">
					<b>Email from your web portfolio.</b> <br><br>
					<p>'.$_GET['txtmessage'].'</p><br>
					<p>Thanks, <b>'. $_GET['txtname'] .'</b></p>
					</body>
				</html>';
	$headers = 'From: ' . $_GET['txtname'] . "\r\n";
	$headers .= "Content-type: text/html\r\n"; 
	
	mail($to, $subject, $message, $headers);
}

?>
