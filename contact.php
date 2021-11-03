<?php


if(!$_POST) exit;

// Email verification, do not edit.
function isEmail($email_contact ) {
	return(preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/",$email_contact ));
}

if (!defined("PHP_EOL")) define("PHP_EOL", "\r\n");

$name_contact     = $_POST['name_contact'];
$email_contact    = $_POST['email_contact'];
$message_contact = $_POST['message_contact'];



if(trim($name_contact) == '') {
	echo '<div class="error_message">You must enter your Name.</div>';
	exit();
} else if(!isEmail($email_contact)) {
	echo '<div class="error_message">You have enter an invalid e-mail address, try again.</div>';
	exit();
	} else if(trim($message_contact) == '') {
	echo '<div class="error_message">Please enter your message.</div>';
	exit();
}




//$address = "HERE your email address";
$address = "contact.hdcv@gmail.com";



// Below the subject of the email
$e_subject = 'Vous-avez été contacter par ' . $name_contact . '.';

// You can change this if you feel that you need to.
$e_body = "Vous-avez été contacter par $name_contact $name_contact avec un message supplémentaire." . PHP_EOL . PHP_EOL;
$e_content = "\"$message_contact\"" . PHP_EOL . PHP_EOL;
$e_reply = "Vous pouvez contacter $name_contact par e-mail, $email_contact";

//$msg = wordwrap( $e_body . $e_content . $e_reply, 70 );

$msg = "Vous-avez été contacter par $name_contact $name_contact avec un message supplémentaire °°\"$message_contact\" °°  Vous pouvez contacter $name_contact par e-mail, $email_contact";

$headers = "From: $email_contact" . PHP_EOL;
$headers .= "Reply-To: $email_contact" . PHP_EOL;
$headers .= "MIME-Version: 1.0" . PHP_EOL;
$headers .= "Content-type: text/plain; charset=utf-8" . PHP_EOL;
$headers .= "Content-Transfer-Encoding: quoted-printable" . PHP_EOL;

$user = "$email_contact";
$usersubject = "Merci à vous";
$userheaders = "From: contact.hdcv@gmail.com\n";
$usermessage = "Merci d'avoir contacté L'hoptal du districte de la cité verte. Nous vous répondrons sous peu !";
mail($user,$usersubject,$usermessage,$userheaders);



if(mail("ngumbukafon@gmail.com", $e_subject, $msg, $headers)) {

	// Message de réussite
	echo "<div id='success_page' style='padding:25px 0'>";
	echo "<strong >E-mail envoyé.</strong><br>" ;
	echo "Merci <strong>$name_contact</strong>,<br> votre message a été soumis. Nous vous contacterons sous peu.";
	echo "</div>";

} 


?>
