<?php

function bereinige($value) {
	return htmlspecialchars($value, ENT_QUOTES, 'UTF-8', true);
}

/* double_encode = true oder false
Wird der Parameter double_encode ausgeschaltet, kodiert PHP bereits existierende HTML-Entities nicht noch einmal. Standardmäßig werden jedoch alle Zeichen konvertiert.
*/

function pageTitle() {
  global $page;
  switch($page) {
    case 'about': echo ' - About'; break;
    case 'guestbook': echo ' - Gästebuch'; break;
    default: echo ' - Startseite'; break;
  }
}
