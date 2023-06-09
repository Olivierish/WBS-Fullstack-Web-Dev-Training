<?php
session_start();
//------------------------------- 
require_once("master.php");

$page = $_GET['goto'] ?? '';

require_once 'inc/header.inc.php';

switch($page) {
	case 'login': include 'inc/form.inc.php'; break;
	case 'info': include 'inc/info.inc.php'; break;
	case "off": logout(); break;
	default: include 'inc/home.inc.php'; break;
}

require_once 'inc/footer.inc.php';


/*
$page = $_GET['goto'] ?? '';

require_once("inc/header.inc.php");
//---------------------------


if(isset($_GET["goto"]))
{	
	switch($_GET["goto"])
	{
		case "info": include("info.php"); break;
		//wenn auf logout klicken, dann die funktion aufrufen
		case "off": logout(); break;
		default: include("inc/home.inc.php"); break;
	}
					//---------------------------------------
}

require_once("inc/footer.inc.php");

*/