<form action="inc/login.php" method="post"> 
	<p>Name: <input type="text" name="nn" /></p>
	<p>E-Mail: <input type="text" name="mail" /></p>
	<p class="anders"> 
		<input type="submit" name="btn" value="weiter" />
	</p>
</form>
<?php
//Meldungen hier anzeigen
if(isset($_GET["hinweis"])){
	if($_GET["hinweis"]=="out")				{
			echo "<p>Abmeldung erfolgreich</p>";
	}
	else if($_GET["hinweis"]=="fehlerNN"){
		echo "<p>Bitte Nachname richtig schreiben</p>";
	}
	else if($_GET["hinweis"]=="fehlerMail"){
		echo "<p>Bitte E-Mail richtig schreiben</p>";
	}
}
?>
