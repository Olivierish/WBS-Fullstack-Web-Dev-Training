<?php
function logout()
{
//session zerstören-------------------------- 
session_destroy();
header("Location:index.php");
}
//-------------------------------------------
function kontolle()
{
	if(!isset($_SESSION["nn"])||empty($_SESSION["nn"]))
	{
		echo "<p>Kein Zugang</p>";
		echo "<a href='index.php?goto=login'>Zum Login</a>";
		session_destroy();
		exit();
	}
}

?>