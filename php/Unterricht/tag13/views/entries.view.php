<div class="col-12 mt-5">
<h2>Schreiben Sie Ihren Kommentar</h2>
    <form action="" method="post">
        <div class="form-group p-1">
          <input type="text" name="name" id="name" class="form-control" placeholder="Name eingeben..." aria-describedby="helpId">
          <!-- <small id="helpId" class="text-muted">Help text</small> -->
        </div>
          <input type="text" name="title" id="title" class="form-control" placeholder="Titel eingeben..." aria-describedby="helpId">
                    <!-- <small id="helpId" class="text-muted">Help text</small> -->
        </div>
        <div class="form-group p-1">
          <label for=""></label>
          <textarea class="form-control" name="inhalt" id="inhalt" cols="10" rows="5" placeholder="Kommentar eingeben..."></textarea>
        </div>
        <div class="p-1">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="submit" class="btn btn-danger">Löschen</button>
        </div>  
    </form>

<hr class="hr my-2 text-dark border-3">

<!-- --------------- -->
<?php
$stmt = $db->prepare('SELECT * FROM `entries` ');
$stmt->execute();
$posts = $stmt->fetchAll();
?>
<pre>
    <?php #print_r($posts); ?>
</pre>
<div class="col-12">
    <h2>Gästebuch</h2>
    <?php foreach($posts AS $post): ?>
        <div class ="card my-2">
            <div class="card-header">
                <div class="row">
                    <h3 class="col-md-6 text-dark display-9"><?= $post['title'] ?></h3>
                    <span class="col-md-6 text-end"><?= $post['name'] ?></span>
                </div>
                
            </div>
            <div class="card-body">
                <?= nl2br($post['comment']); ?>
            </div>
            
        </div>
    <?php endforeach; ?>
</div>

<?php 
    $content = "Hallo Welt \nHallo PHP\nHallo JS";
    echo $content;
    echo '<hr>';
    echo nl2br($content);

    #<p>Hallo Welt </p><p>Hallo PHP</p><p>Hallo JS</p>

    $absatz = explode("\n",$content);
    #Ergebnis : $absatz = ["Hallo Welt, Hallo PHP, Hallo JS"];

    echo '<p>'.implode('#',$absatz).'</p>';
    #Ergebnis : <p>Hallo Welt#Hallo PHP#Hallo JS</p>
    
    echo '<p>'.implode('</p><p>',$absatz).'</p>';
    #Ergebnis : <p>Hallo Welt</p><p>Hallo PHP</p><p>Hallo JS</p>
?>