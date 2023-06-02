<form action="index.php?page=register" method="POST" class="bg-primary col-md-6 bg-opacity-10 rounded-2 p-3" id="myForm">
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
	
	<div>
		<input type="submit" value="senden" class="btn btn-success" name="btnRegister" />
		<input type="reset" value="löschen" class="btn btn-danger"  />
	</div>
</form>

<div class="row ausgabe">



</div>
