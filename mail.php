<?php

	$emailTo = "jm.vetu@gmail.com";

	$headers = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=utf-8\r\n";
	$headers .= "From: ".$_POST['email']."\r\n";

	if (!isset($_POST['subject'])) {
		$subject = "Sujet";
	} else {
		$subject = $_POST['subject'];
	}

	reset($_POST);

	$body = "";
	$body .= "<p><b>Nom: </b>".$_POST['name']."</p>";
	$body .= "<p><b>Email: </b>".$_POST['email']."</p>";
	$body .= "<p><b>Objet: </b>".$subject."</p>";
	$body .= "<p><b>Message: </b>".$_POST['message']."</p>";

	if( mail($emailTo, $subject, $body, $headers) ){
		$mail_sent = true;
	} else {
		$mail_sent = false;
	}
	if(!isset($resp)){
		echo json_encode($mail_sent);
	}

