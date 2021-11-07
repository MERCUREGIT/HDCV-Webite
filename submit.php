<?php
if($_POST['fname']){
			$to = "contact@hdcv.org";
		$from =  $_POST["email_address"];
		$message = "<strong>Name: </strong>".$_POST["fname"]."<br />";
		$message .= "<strong>Email Address: </strong>".$_POST["email_address"]."<br />";
		$message .= "<strong>Subject: </strong>".$_POST["subject"]."<br />";
		$message .= " <strong>Message: </strong>".$_POST["msg"]."<br />";
		$subject = 'Contact Us';		
		$headers = "From: ".$_POST["email_address"]."\n";
		$headers .= "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
		
	    $send =	mail($to,$subject,$message,$headers);



if($send)
{
	echo "success";
}
else
{
	echo "error";
	}
}


if($_POST['app_fname']){
			$to = "contact@hdcv.org";
		$from =  $_POST["app_email_address"];
		$message = "<strong>Nom & Prénom: </strong>".$_POST["app_fname"]."<br />";
		$message .= "<strong>Last Name: </strong>".$_POST["app_lname"]."<br />";
		$message .= "<strong>Email Address: </strong>".$_POST["app_email_address"]."<br />";
		$message .= "<strong>Phone No: </strong>".$_POST["app_phone"]."<br />";
		$message .= "<strong>Appointment Date: </strong>".$_POST["datepicker"]."<br />";
		$message .= "<strong>Gender: </strong>".$_POST["gender"]."<br />";
		$message .= "<strong>Message: </strong>".$_POST["app_msg"]."<br />";
		$subject = 'Book Appointment';		
		$headers = "From: ".$_POST["app_email_address"]."\n";
		$headers .= "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
		
	    $send =	mail($to,$subject,$message,$headers);



if($send)
{
	echo "success";
}
else
{
	echo "error";
	}
}



?>