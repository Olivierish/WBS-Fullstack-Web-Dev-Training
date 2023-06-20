<div class="col-md-12 p-2" >
    <h2 class="text-center">Register Form</h2>
    <form action="auth/user/insert.php" method="post" class="rounded-1 p-2 col-md-6 bg-white mx-auto">
        <div class="form-group py-2">
          <!-- <label for=""></label> -->
          <input type="text" name="name" id="" class="form-control" placeholder="Nachname.." aria-describedby="helpId">
          <!-- <small id="helpId" class="text-muted">Help text</small> -->
        </div>
        <div class="form-group py-2">
          <!-- <label for=""></label> -->
          <input type="text" name="vorname" id="" class="form-control" placeholder="Vorname.." aria-describedby="helpId">
          <!-- <small id="helpId" class="text-muted">Help text</small> -->
        </div>
        <div class="form-group py-2">
          <!-- <label for=""></label> -->
          <input type="text" name="mail" id="" class="form-control" placeholder="E-mail.." aria-describedby="helpId">
          <!-- <small id="helpId" class="text-muted">Help text</small> -->
        </div>
        <div class="form-group py-2">
          <!-- <label for=""></label> -->
          <input type="text" name="pwd" id="" class="form-control" placeholder="Password.." aria-describedby="helpId">
          <!-- <small id="helpId" class="text-muted">Help text</small> -->
        </div>
        <!-- <div class="form-group py-2"> -->
          <!-- <label for=""></label> -->
          <!-- <input type="text" name="pwd" id="" class="form-control" placeholder="Password.." aria-describedby="helpId" value="<?= bin2hex(random_bytes(64)); ?>"> -->
          <!-- <small id="helpId" class="text-muted">Help text</small> -->
        <!-- </div> -->
        <div class="form-group py-2 text-center">
        <button type="submit" class="btn btn-lg btn-warning">Mich anmelden</button>
        <button type="reset" class="btn btn-lg btn-secondary">Löschen</button>
        </div>
        
        
    </form>
</div>

<?php 
// $pwd = md5('*)´öjdbu&4%$§"0jbsv_+676bg');
// $pwd = sha1('*)´öjdbu&4%$§"0jbsv_+676bg');
// $pwd = password_hash('*)ö+676bg',PASSWORD_DEFAULT);

// $userEingabe = '*)ö+676bg';

// var_dump(password_verify($userEingabe, $pwd));
// var_dump($pwd);


// $start= microtime(true);
// $pwd = '*)ö+676bg';
// $ende= microtime(true);
// var_dump($ende - $start);
#float(3.09944)

?>