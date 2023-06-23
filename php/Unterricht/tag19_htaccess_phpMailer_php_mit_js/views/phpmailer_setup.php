<?php

if(isset($_POST["submit"]))
{

    require 'class/class.phpmailer.php';
    $mail = new PHPMailer;
    $mail->IsSMTP();        //Sets Mailer to send message using SMTP
    $mail->Host = 'dein smtp-host';  //Sets the SMTP hosts
    $mail->Port = '80';        //Sets the default SMTP server port
    $mail->SMTPAuth = true;       //Sets SMTP authentication. Utilizes the Username and Password variables
    $mail->Username = 'xxxxxxxxxx';     //Sets SMTP username
    $mail->Password = 'xxxxxxxxxx';     //Sets SMTP password
    $mail->SMTPSecure = '';       //Sets connection prefix. Options are "", "ssl" or "tls"
    $mail->From = $_POST["email"];     //Sets the From email address for the message
    $mail->FromName = $_POST["name"];    //Sets the From name of the message
    $mail->AddAddress('info@test.com', 'Name');//Adds a "To" address
    $mail->AddCC($_POST["email"], $_POST["name"]); //Adds a "Cc" address
    $mail->WordWrap = 50;       //Sets word wrapping on the body of the message to a given number of characters
    $mail->IsHTML(true);       //Sets message type to HTML
    $mail->Subject = $_POST["subject"];    //Sets the Subject of the message
    $mail->Body = $_POST["message"];    //An HTML or plain text message body
		if($mail->Send())        //Send an Email. Return true on success or false on error
		{
				echo "<span style='color: green'>E-Mail erfolgreich verschickt!</span>";
		}
		else
		{
				echo "<span style='color: red'>Error!</span>";
		}

}

?>