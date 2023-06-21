<?php

function e($value) {
	return htmlspecialchars($value, ENT_QUOTES, 'UTF-8', true);
}

function pageTitle() {
	global $page;
	switch($page) {
		case 'about': echo ' - Was ist WebDesign?'; break;
		case 'post': echo ' - Gästebuch'; break;
		case 'register': echo ' - Registrierung'; break;
		case 'kontakt': echo ' - Kontakt'; break;
		default: echo ' - Startseite'; break;
	}
}

function textTeaser(string $text, int $length = 50) {
		global $id;
    if (strlen($text) > $length) {
				$text = substr($text, 0, $length) . 
					"<a href='?page=post_detail&id=".$id."' class='btn btn-sm btn-danger ms-2'>weiterlesen</a>";
    }
    return $text;
}
