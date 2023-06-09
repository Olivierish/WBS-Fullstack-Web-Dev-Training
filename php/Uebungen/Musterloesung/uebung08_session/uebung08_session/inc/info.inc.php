<?php
kontolle(); 

if(isset($_POST["btn"]))
{
	if(!empty($_POST["zeichen"])):	
	$z=$_POST["zeichen"];
?>
<table>
<tr>
	<th>Erklärung</th><th>Ergebnis</th>
</tr>
<tr>
	<td>Original</td><td><?= $z ?></td>
	</tr>
<tr>
	<td>Länge</td><td><?=strlen($z)?></td>
</tr>
<tr>
	<td>Alles Klein</td><td><?= strtolower($z)?></td>
</tr>
<tr>
	<td>Alles Gross</td><td><?=strtoupper($z)?></td>
</tr>
<tr>
	<td>Umdrehen</td><td><?=strrev($z)?></td>
</tr>
<tr>
	<td>1.Zeichen Gross</td><td><?=ucfirst($z)?></td>
</tr>
<tr>
	<td>Wort ersetzen</td><td><?=str_replace("hallo","Hi",$z)?></td>
</tr>
</table>
<?php
	endif;
	}//ende isset
//-----------------------------------------
?>
<form action="<?=$_SERVER["PHP_SELF"]?>?goto=info" method="post">
<fieldset><legend>Bitte Zeichen eingeben</legend>
	<p><input type="text" name="zeichen" /></p>
	<p><input type="submit" value="Zeichen senden" name="btn" /></p>
</fieldset>
</form>
