<?php
$page = $_GET['page'] ?? '';

require_once __DIR__.'/inc/db_connect.php';
#var_dump($db);
require_once __DIR__.'/inc/functions.php';

require_once __DIR__.'/inc/header.php';


#require __DIR__.'/views/index.view.php';

$templateFile = __DIR__.'/views/'  .$page.   '.view.php'; 

//wenn die Datei im Ordner "views/" existiert dann die einbinden und zeigen
//sonst zeig die /views/index.view.php
if(file_exists($templateFile)) {
	require_once $templateFile;
}
else {
	require_once __DIR__.'/views/index.view.php';
}

require_once __DIR__.'/inc/footer.php';

