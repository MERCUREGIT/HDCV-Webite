<?php




if($_POST['fname']){
			//$to = "contact.hdcv@gmail.com ";
			$to = "ngumbukafon@gmail.com ";
		$from =  $_POST["email_address"];
		$message = "&nbsp;&nbsp;&nbsp;&nbsp;<strong>Nom: </strong>".$_POST["fname"]."<br />";
ngumbuka
if($_POST['app_fname']){
	echo "test working";
			$to = "ngumbukafon@gmail.com";
			
		$from =  $_POST["app_email_address"];
		$message = "&nbsp;&nbsp;&nbsp;&nbsp;<strong>Nom: </strong>".$_POST["app_fname"]."<br />";
		$message .= "&nbsp;&nbsp;&nbsp;&nbsp;<strong>Prénom: </strong>".$_POST["app_lname"]."<br />";
		$message .= "&nbsp;&nbsp;&nbsp;&nbsp;<strong>Email Address: </strong>".$_POST["app_email_address"]."<br />";
		$message .= "&nbsp;&nbsp;&nbsp;&nbsp; <strong>Phone No: </strong>".$_POST["app_phone"]."<br />";
		$message .= "&nbsp;&nbsp;&nbsp;&nbsp; <strong>Date de rendez-vous: </strong>".$_POST["datepicker"]."<br />";
		$message .= "&nbsp;&nbsp;&nbsp;&nbsp; <strong>Genre: </strong>".$_POST["gender"]."<br />";
		$message .= "&nbsp;&nbsp;&nbsp;&nbsp; <strong>Message: </strong>".$_POST["app_msg"]."<br />";
		$subject = 'Prise de Rendez-Vous';		
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
