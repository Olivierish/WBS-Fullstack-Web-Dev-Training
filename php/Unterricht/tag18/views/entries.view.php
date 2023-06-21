<div class="col-12 mt-5">
<h2>Schreiben Sie Ihren Kommentar</h2>
    <form action="auth/entries/insert.php" method="post" class="rounded-1 p-5">
        <!-- <div class="form-group p-1"> -->
          <!-- <input type="text" name="name" id="name" class="form-control" placeholder="Name eingeben..." aria-describedby="helpId"> -->
          <!-- <small id="helpId" class="text-muted">Help text</small> -->
        <!-- </div> -->
        <div class="form-group p-1">
          <input type="text" name="titel" id="titel" class="form-control" placeholder="Titel eingeben..." aria-describedby="helpId">
                    <!-- <small id="helpId" class="text-muted">Help text</small> -->
        </div>
        <div class="form-group p-1">
          <textarea class="form-control" name="inhalt" id="inhalt" cols="10" rows="5" placeholder="Kommentar eingeben..."></textarea>
        </div>
        <div class="p-1">
            <?php 
            var_dump((isset($_SESSION['id'])) && (isset($_SESSION['login']))); #!!!ERROR!!!!
            if((isset($_SESSION['id'])) && (isset($_SESSION['login']))):            
                ?> 
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-danger">Löschen</button>
            <?php else: ?>
                <p class="alert alert-warning my-2 fw-fold" >Nach Anmeldung, können Sie sich ins Gäastebuch verewigen.</p>
            <?php endif;?>
        </div>  
    </form>

<hr class="hr my-2 text-dark border-3">

<!-- --------------- -->
<?php
$stmt = $db->prepare('SELECT count(*) AS `anzahl` FROM `entries_neu` ');
$stmt->execute();

// $posts = $stmt->fetchAll();
$resAnzahl = $stmt->fetch()['anzahl'];

$pro_seite = 4;

$anzahlSeiten = ceil($resAnzahl / $pro_seite);

$aktSeite = 1;
if(isset($_GET['seite'])){
    $aktSeite = (int)$_GET['seite'];
    if(($aktSeite <= 0) && ($aktSeite > $anzahlSeiten)){
        $aktSeite = 1;
    }
}

?>
<pre>
    <?php #print_r($posts); ?>
</pre>
<div class="col-12">
    <h2 class="text-center">Anzahl der Kommentare (<?php echo $resAnzahl ?>)</h2>
    <?php 
    $stmt2 = $db->prepare('SELECT *, entries_neu.created_at AS datum FROM `entries_neu` INNER JOIN `users`
                                    ON
                           entries_neu.user_id = users.id
                           ORDER BY entries_neu.id DESC LIMIT :anfang, :proSeite');

    $stmt2 -> bindValue('proSeite', $pro_seite, PDO::PARAM_INT);
    $stmt2 -> bindValue('anfang', ($aktSeite - 1) * $pro_seite, PDO::PARAM_INT);
    // $stmt2 = $db->prepare('SELECT * FROM `entries` ORDER BY `id` DESC LIMIT '.$pro_seite);
    $stmt2->execute();
    $posts = $stmt2->fetchAll();

    ?>

    <div class="row">
        <div class ="col-12 p-2 d-flex flex-column align-items-center">
            <?php foreach($posts AS $post): ?>
            <!-- <div class ="card p-0 col-md-12 mb-2 bg-warning bg-opacity-25"> -->
            <div class ="card mb-2" style="width: 24rem;">
                <div class="card-body">
                <h5 class="card-title"><?= $post['title'] ?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?= $post['nachname'] ?></h6>
                <p class="card-text"> <?= nl2br($post['comment']); ?> </p>
                </div>
                <div class="card-footer">
                    <em>
                        Geschrieben am : <?= formatiereDatum($post['datum'])?>
                    </em>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="row p-2">
        <nav class="my-2 p-0  d-flex flex-column align-items-center">
            <ul class="pagination">
                <?php for($i = 1; $i <= $anzahlSeiten; $i++): ?>
                    <li class="page-item">
                        <a href="index.php?page=entries&seite=<?= $i ?>" class="page-link"> <?= $i ?></a>
                    </li>
                <?php endfor; ?>
            </ul>
        </nav>
    </div>
</div>

<?php 
    // $content = "Hallo Welt \nHallo PHP\nHallo JS";
    // echo $content;
    // echo '<hr>';
    // echo nl2br($content);

    #<p>Hallo Welt </p><p>Hallo PHP</p><p>Hallo JS</p>

    #$absatz = explode("\n",$content);
    #Ergebnis : $absatz = ["Hallo Welt, Hallo PHP, Hallo JS"];

    #echo '<p>'.implode('#',$absatz).'</p>';
    #Ergebnis : <p>Hallo Welt#Hallo PHP#Hallo JS</p>
    
    #echo '<p>'.implode('</p><p>',$absatz).'</p>';
    #Ergebnis : <p>Hallo Welt</p><p>Hallo PHP</p><p>Hallo JS</p>
?>