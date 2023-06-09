<?php
//-------------------------------
	$muster = "/^[a-zäöüß]{1}[a-zäöüß\s\-]{1,20}$/i"; 
	$mail = "/^([a-zA-Z0-9\.]+@+[a-zA-Z]+(\.)+[a-zA-Z]{2,3})$/";
	//-------------------------------
	if(!preg_match($muster,$_POST["nn"]) )
	{
		header("Location: ../index.php?goto=login&hinweis=fehlerNN");
	}
	else if(!preg_match($mail,$_POST["mail"]) )
	{
		header("Location: ../index.php?goto=login&hinweis=fehlerMail");
	}
	else
	{
		//-----------------------------
		//wenn alles ok dann eine Sitzung starten
		session_start();
		//Werte der Felder Nachname und E-Mail an session übergeben
		//neueSessionVariable = WertDesFeldesInForm
		$_SESSION["nn"] = $_POST["nn"];
		$_SESSION["mail"]  = $_POST["mail"];
		
		//wenn alles ok dann zu index.php
		header("Location: ../index.php");
	}
?>