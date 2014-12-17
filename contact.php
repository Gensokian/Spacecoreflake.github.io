<?php
$ToEmail = 'Spacecoreflake@gmail.com';
$EmailSubject = 'NEW CONTACT! READ IT STOOPID';
$mailheader = "From: ".$_POST["name"]."\r\n";
$mailheader .= "Reply-To: ".$_POST["name"]."\r\n";
$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n";
$MESSAGE_BODY = "Name: ".$_POST["name"]."";
$MESSAGE_BODY .= "Username: ".$_POST["Username"]."";
$MESSAGE_BODY .= "Job: ".$_POST["Job"]."";
$MESSAGE_BODY .= "Program".$POST["Program"]."";
$MESSAGE_BODY .= "Message: ".nl2br($_POST["Message"])."";
mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure");
?>

<center><h1>You will be back on the page in 5 Seconds!</h1></center>
<meta http-equiv="refresh" content="5; url=http://gdriv.es/mlp">