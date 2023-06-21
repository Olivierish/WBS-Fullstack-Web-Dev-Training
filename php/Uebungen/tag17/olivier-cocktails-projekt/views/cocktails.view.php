<?php
    // $stmt = $db->prepare('SELECT * FROM `cocktails` order by `id` DESC');
    $stmt = $db->prepare('SELECT *, cocktails.created_at AS datum FROM `cocktails` INNER JOIN `users` ON 
                            cocktails.id_user= users.id 
                            ORDER BY  cocktails.id DESC');
    $stmt->execute();
    $cocktails = $stmt->fetchAll();
    // var_dump($cocktails);

    $stmtcount = $db->prepare('SELECT count(*) AS `anzahl` FROM `cocktails`');
    $stmtcount-> execute();
    $resCount = $stmtcount->fetch()['anzahl'];
    
?>

<header  class="jumbotron bg-image px-5 py-3 position-relative" style="background :linear-gradient(90deg, rgba(0,0,0,1) 0%, rgba(255,255,255,0) 70%),url('images/bg3.jpg'); height: calc(100vh - 500px); background-size:100% 160%; background-position:100%; background-repeat: no-repeat;">
    <p class="display-5 text-light position-absolute top-50">Here you will find <?= $resCount ?> Cocktails.</p>
</header>

<div class="bg-main p-5">
    <main>
        <div class="row">
        <?php foreach($cocktails AS $cocktail): ?>
            <div class="col-md-3 py-3">
                <div class="card col-md-12 bg-dark">
                    <!-- <img class="card-img-top" src="images/cocktails/maracuja.jpg" alt="Card image cap" width="300" height="300"> -->
                    <img class="card-img-top img-fluid" src="images/cocktails/<?= e($cocktail['image']); ?>" alt="<?= e($cocktail['name']); ?>" >
                    <div class="card-body">
                    <h5 class="card-title  color-5"><?= e($cocktail['name']); ?></h5>
                    <p class="card-text text-light"><?= truncate(e($cocktail['summary']), 100); ?></p>
                    <a href="index.php?page=cocktail-read-more&id=<?= $cocktail['id'] ?>">
                        <button type="button" class="btn btn-sm btn-secondary">Read More</button>
                    </a>
                </div>
                    <div class="card-footer d-flex justify-content-between">
                    <small class="text-secondary"><?= date("M j Y",strtotime(e($cocktail['datum']))); ?></small>
                    <!-- <small class="text-secondary">Autor</small> -->
                    <small class="text-secondary">
                        <?php echo e($cocktail['firstname']); ?>
                    </small>
                    
                    </div>
                </div>
            </div>
            <?php endforeach; ?>        
        </div>
    </main>



            