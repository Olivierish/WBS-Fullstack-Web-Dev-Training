<div class="col-md-12 p-2">
	<form action="auth/user/insert.php" method="POST" class="rounded-1 p-2"> 
	<fieldset class="border border-light border-2 p-1 rounded-2"> 
		<legend class="text-center">Register</legend>
		<div class="p-1">
			<input type="text" name="name" placeholder="Nachname...." class="form-control my-1" />
      <input type="text" name="vorname" placeholder="Vorname...." class="form-control my-1" />
      <input type="text" name="mail" placeholder="E-Mail...." class="form-control my-1" />
			<input type="text" name="pwd" placeholder="Passwort...." class="form-control my-1" />		
      <input type="hidden" name="token" value="<?= csrf_token();?>" class="form-control" />	
		</div>
    <div class="my-1 text-center">
      <button type="submit" class="btn btn-lg btn-primary fw-bold">mich anmelden</button>
      <button type="reset" class="btn btn-lg btn-danger fw-bold">löschen</button>
    </div>
	</fieldset>
	</form>
</div>
