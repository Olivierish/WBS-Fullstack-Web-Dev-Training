<?php
//--------------------------------------------------
//Funktion für Datum anzeigen
function datum()
{
	echo date("d---m---Y");
}
//-------------------------------------------------
//Funktion für die aktive Links
#($page==='kunden') ? 'btn btn-primary btn-sm fw-bold' : '';
function activLink($page, $value='')
{
	/*if($page === $value) {
		echo 'btn btn-primary btn-sm fw-bold';
	} else {
		echo '';
	}*/
	return ($page === $value) ? 'btn btn-primary btn-sm fw-bold' : '';
}//ende activLink
//--------------------------------------------------
?>