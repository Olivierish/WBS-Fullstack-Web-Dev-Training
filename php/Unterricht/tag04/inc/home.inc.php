
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" class="bg-success col-md-6 bg-opacity-10 p-3 rounded-2">
	<div class="my-1">
		<label for="frau" >Frau</label> 
		<input type="radio"  id="frau"  value="Frau" name="anrede" class="form-check-input"/>
		<label for="herr">Herr</label>
		<input type="radio" id="herr" value="Herr" name="anrede" class="form-check-input"/>
	</div>
	<div class="my-1">
		<input type="text" name="vorname" placeholder="Vorname eingeben"  class="form-control"/>
	</div>
	
	<div class="my-1">
		<input type="text" name="nachname" placeholder="Nachname eingeben"  class="form-control"/>
	</div>
	
	<div class="my-1">
		<input type="password" name="psw" placeholder="Passwort eingeben"  class="form-control"/>
	</div>

	<div class="my-1">
		<input type="text" name="wohnort" placeholder="Wohnort eingeben" class="form-control"/>
	</div>
	<!--++++++-->
	<div class="my-1">
		<label for="tanzen">Tanzen</label>
		<input type="checkbox" value="Tanz" name ="hobby[]" id="tanzen">
		
		<label for="singen">Singen</label>
		<input type="checkbox" value="Singen" name ="hobby[]" id="singen">
		
		<label for="laufen">Laufen</label>
		<input type="checkbox" value="Laufen" name ="hobby[]" id="laufen">
	</div>


	<div class="my-1">
		<select name="fach" class="form-select"> 
			<option>Bitte Ihr Lieblingsfach auswählen</option>
			<option>HTML</option>
			<option>JS</option>
			<option>PHP</option>
			<option>MYSQL</option>
			<option>Laravel</option>
		</select>
	</div>
	
	<div class="my-1">
		<input type="submit" value="senden" class="btn btn-success" name="btnRegister"/>
		<input type="reset" value="löschen"  class="btn btn-danger"/>
	</div>
</form>
<!--++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->
<div class="row">
	<div class="col-12">
		<?php
		if (isset($_POST['btnRegister'])) {
			#Felder dürfen nicht leer sein 
			if(
				empty($_POST['anrede']) ||
				empty($_POST['vorname']) ||
				empty($_POST['nachname']) ||
				empty($_POST['psw']) ||
				empty($_POST['wohnort']) ||
				empty($_POST['fach'])
			):
			echo '<p> Bitte alle Felder ausfüllen</p>';
			else: 
				echo $_POST['anrede'] . ' ' . $_POST['nachname'];
				echo '<p>Passwort: '.$_POST['psw'][0].'******'.$_POST['psw'][-1]. '</p>';

				echo '<p>Hobbies: <br/>';
				foreach ($_POST['hobby'] as $value) {
					echo $value . ' ';
				}
				echo '</p>';
			endif; #ende isset 
		}
		?>
	</div>
</div>
