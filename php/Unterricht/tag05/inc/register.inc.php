<form action="index.php?page=cookie" method="POST" class="bg-primary col-md-6 bg-opacity-10 rounded-6 p-3">
	<div class="my-1">
		<input type="text" name="vorname" 
						placeholder="Vorname eingeben" 
							class="form-control"
							value="<?= $_COOKIE['vorname'] ?? ''; ?>"
							 />
	</div>
	
	<div class="my-1">
		<input type="text" name="nachname" 
						placeholder="Nachname eingeben" 
							class="form-control"
							value="<?= $_COOKIE['nachname'] ?? ''; ?>"
							  />
	</div>
	
	<div class="my-1">
		<input type="text" name="mail" 
						placeholder="E-Mail eingeben" 
								class="form-control"
								value="<?= $_COOKIE['email'] ?? ''; ?>"
								 />
	</div>

	<div class="my-1">
		<input type="password" name="pwd" placeholder="Passwort eingeben" class="my-1 form-control" />
	</div>
	
	<div>
		<input type="submit" value="senden" class="btn btn-success" name="btnRegister" />
		<input type="reset" value="löschen" class="btn btn-danger"  />
	</div>
</form>

<div class="row">
<?php 
if(isset($_POST['btnRegister'])){
	echo '<div class ="alert alert-primary my-4 col-md-6">';
		if(empty($_POST['vorname']) || empty($_POST['nachname']) || empty($_POST['mail']) || empty($_POST['pwd'])){
			echo 'Bitte Daten eingeben';
		}
		else{
			$firstname = $_POST['vorname'];
			$lastname = $_POST['nachname'];
			$mail = $_POST['mail'];
			#--------------------------------
			setcookie('vorname',$firstname, time() + 60 * 60 * 24 * 30);
			setcookie('vorname',$lastname, time() + 3600);
			setcookie('email',$mail, time() - 3600);
			#--------------------------------


		} #ende else
	echo '</div>';
}#end isset
?>
</div>

