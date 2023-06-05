<div class="col-md-4 p-1">
		<?php 
			if(isset($_SESSION['m'])):
				echo '<p class="text-light fs-2">Hallo '.$_SESSION['nn'].', '.$_SESSION['vn'].'</p>';
				echo '<p><a href="inc/logout.php" class="btn btn-warning btn-sm text-light">Logout</a></p>';
			else : 
		?>
		<form class="bg-light p-2" action="inc/login.php" method="post">
			<input type="text" name="nachname" placeholder="Bitte Name eingeben" />
			<input type="text" name="vorname" placeholder="Bitte Vorname eingeben" />
			<input type="text" name="mail" placeholder="Bitte E-Mail eingeben" />
			<input type="submit"  value="einloggen" class="btn btn-success w-100 my-1" />
		</form>
		<?php endif; ?>		
		
		<?php 
		if(isset($_GET['msg'])):
			if($_GET['msg'] == 'errorNN'){
				echo '<p class="bg-light text-danger p-1">Nachname darf nur Buchstaben haben</p>';
			} else if($_GET['msg'] == 'errorVN'){
				echo '<p class="bg-light text-danger p-1">Vorname darf nur Buchstaben haben</p>';
			}else if($_GET['msg'] == 'errorM'){
				echo '<p class="bg-light text-danger p-1">Mail: test@test.de</p>';
			}else if($_GET['msg'] == 'off'){
				echo '<p class="bg-light text-danger p-1">Logout erfolgreich!</p>';
			}
		endif; #end isset
		?>

	</div>