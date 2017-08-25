<?php
if (isset($_REQUEST['submit'])) {

	$subscriberEmail = $_REQUEST['subscriberEmail'];
	$subscriberName = $_REQUEST['subscriberName'];
	$to = "anubhav.psit.2009@gmail.com";
	$subject = "Requst for newsletter";
	$txt = "Request for newsletter came from " . $subscriberName . " with email " .$subscriberEmail;
	$headers = "From: anubhav.psit.2009@gmail.com" . "\r\n" .
	"CC: mca.ruchishukla@gmail.com";

	mail($to,$subject,$txt,$headers);

	header('Location: index.html?msg=thanks');
}
?>