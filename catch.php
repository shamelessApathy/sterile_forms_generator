<?php

// Setting POST VARS as ready for email

$email = $_POST['email'] ?? null;
$service = $_POST['service'] ?? null;
$description = $_POST['description'] ?? null;
 // Might need to sterilize them here....





// Setting email VARS

$subject = "Inquiry : $service";
$message = $description;
$headers = array('Content-Type: text/html; charset=UTF-8');
$test= wp_mail( "bcm811@gmail.com", $subject, $message, $headers);

// Test to see if wp_mail actually works,. or thinks it works

var_dump($test);
?>