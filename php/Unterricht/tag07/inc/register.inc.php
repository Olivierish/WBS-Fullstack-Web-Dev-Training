<h2>Reguläre Ausdrücke</h2> 

<form action="index.php?page=register" method="POST" class="bg-primary col-md-6 bg-opacity-10 rounded-2 p-3">
	<div class="my-1">
		<input type="text" name="vorname" 
						placeholder="Vorname eingeben" 
							class="form-control"
							value="<?= $_POST['vorname'] ?? '' ; ?>" />
	</div>
	
	<div class="my-1">
		<input type="text" name="nachname" 
						placeholder="Nachname eingeben" 
							class="form-control"
							value="<?= $_POST['nachname'] ?? '' ; ?>"  />
	</div>

  <div class="my-1">
	  <input type="text" name="mail" 
					placeholder="E-Mail eingeben" 
						class="form-control"
						value="<?= $_POST['mail'] ?? '' ; ?>"  />
  </div>
	
	<div class="my-1">
	  <input type="text" name="city" 
					placeholder="Wohnort eingeben" 
						class="form-control"
						value="<?= $_POST['city'] ?? '' ; ?>"  />
  </div>
	<div class="my-1">
	  <input type="text" name="plz" 
					placeholder="PLZ eingeben" 
						class="form-control"
						value="<?= $_POST['plz'] ?? '' ; ?>"  />
  </div>
	
	<div>
		<input type="submit" value="senden" class="btn btn-success" name="btn" />
		<input type="reset" value="löschen" class="btn btn-danger"  />
	</div>
</form>
<div class="row">
<div class="alert alert-success my-4">
<?php 
if(isset($_POST['btn'])){
	echo '<p>Dein Name: '.bereinige(ziechenEntfernen($_POST['nachname'])).'</p>';
	echo '<p>Dein Vorname: '.bereinige($_POST['nachname']).'</p>';
}
?>
</div>
</div>