<div class="col-12">

<form action="<?= '?page=kontakt' ?>" method="POST" class="rounded-1 p-2">
<fieldset class="border border-light border-2 p-1 rounded-2">
	<legend class="text-center">Kontakt</legend>
	<div class="p-1">
		<input type="text" name="name" class="form-control my-1" value="<?= $_POST['name'] ?? ''?>" placeholder="Name eingeben..."	value = "" />
		<input type="text" name="mail" class="form-control my-1" value="<?= $_POST['mail'] ?? ''?>" placeholder="E-Mail eingeben..."	value = "" />
		<input type="text" name="betreff" class="form-control my-1" value="<?= $_POST['betreff'] ?? ''?>" placeholder="Betreff eingeben..."	value = "" />
		<textarea  name="nachricht" cols="10" rows="5" 
				placeholder="Ihr Text..." class="form-control my-1"><?= $_POST['nachricht'] ?? ''?></textarea>
	</div>
	<div class="my-1 text-center">
		<input type="submit" value="Absenden" name="btnKontakt" class="btn btn-primary w-50 py-2 fs-5" />
	</div>
</fieldset>
</form>

<?php
/*
filter_var — Filtern einer Variablen mit einem angegebenen Filter
FILTER_VALIDATE_EMAIL - Prüft, ob der Wert eine gültige E-Mail-Adresse darstellt. 

*/
if(isset($_POST["btnKontakt"]))
{
	
	if(empty($_POST['name']) || 
			empty($_POST['mail']) || 
				empty($_POST['betreff']) || 
					empty($_POST['nachricht'])) {
						
		echo "<p class='text-danger fs-4 fw-bold bg-light d-inline-block p-1'>Bitte alle Felder ausfüllen!</p>";
	}
	else if(!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
		echo "<p class='text-danger fs-4 fw-bold bg-light d-inline-block p-1'>E-Mail ist nicht richtig!</p>";
	}
	else {
		
    require 'class/class.phpmailer.php';
    $mail = new PHPMailer;
		$mail->CharSet = 'UTF-8';
    $mail->IsSMTP();        //Sets Mailer to send message using SMTP
    $mail->Host = 'wp1008398.mailout.server-he.de';  //Sets the SMTP hosts
    $mail->Port = '587';        //Sets the default SMTP server port
    $mail->SMTPAuth = true;       //Sets SMTP authentication. Utilizes the Username and Password variables
    $mail->Username = 'wp1008398-basmarc';     //Sets SMTP username
    $mail->Password = 'hamburg_23hamburg_23';     //Sets SMTP password
    $mail->SMTPSecure = 'tls';       //Sets connection prefix. Options are "", "ssl" or "tls"
    $mail->From = $_POST["mail"];     //Sets the From email address for the message
    $mail->FromName = e($_POST["name"]);    //Sets the From name of the message
    $mail->AddAddress('bashir@bashir-webspace.de', 'Bashir');//Adds a "To" address
    #$mail->AddCC($_POST["mail"], $_POST["name"]); //Adds a "Cc" address
    $mail->WordWrap = 50;       //Sets word wrapping on the body of the message to a given number of characters
    $mail->IsHTML(true);       //Sets message type to HTML
    $mail->Subject = e( $_POST["betreff"]);    //Sets the Subject of the message
    $mail->Body = nl2br(e($_POST["nachricht"]));    //An HTML or plain text message body
		if($mail->Send())        //Send an Email. Return true on success or false on error
		{
				$_SESSION['msg'] = "E-Mail erfolgreich verschickt!";
				header('Location: index.php?page=kontakt');
		}
		else
		{
			$_SESSION['msg'] = "Error!";
			header('Location: index.php?page=kontakt');
		}
		
	}//ende else
		
}


?>
</div>
