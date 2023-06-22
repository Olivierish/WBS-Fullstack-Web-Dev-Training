<?php
    if(isset($_GET['id'])){
        $id = e($_GET['id']);
        $stmt = $db->prepare('SELECT * FROM `cocktails` WHERE `id` = :id');

        $stmt -> bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $cocktail = $stmt->fetch();
    }
?>
<header  class="jumbotron bg-image px-5 py-3 position-relative" style="background :linear-gradient(90deg, rgba(0,0,0,1) 0%,
 rgba(255,255,255,0) 70%),url('images/cocktails/<?= $cocktail['image']?>'); height: calc(100vh - 500px); background-size:cover; background-position: 0% 20%; 
 background-position:100%; background-repeat: no-repeat;">
    <p class="display-5 text-light position-absolute top-50"><?= $cocktail['name']?></p>
</header>

<div class="bg-main p-5">
<main>
<?= $cocktail['full_text']; ?>
<p class="text-secondary">
Cheers!, Prost!, À la santé !, ¡Salud!, Salute!, Afya!, 乾杯 (Kanpai)
</p>
<div class="row">
<div class="col-md-6">
                    <?php 
                    // if((isset($_SESSION['id'])) && (isset($_SESSION['login']))):    
                    $login_system_not_yet_added = false;        
                    if($login_system_not_yet_added):            
                        ?> 
                    <a class="btn btn-warning" href="index.php?page=edit" role="button">Modify</a>
                    <a class="btn btn-secondary" href="auth/entries/delete.php" role="button">Delete</a>
                    <?php endif;?>
                </div>  
</div>
</main>