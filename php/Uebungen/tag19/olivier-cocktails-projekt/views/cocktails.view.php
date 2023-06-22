<?php
    $stmt = $db->prepare('SELECT *,cocktails.created_at AS datum, cocktails.id as idc FROM `cocktails` INNER JOIN `users` 
                            ON cocktails.id_user = users.id 
                            order by cocktails.id DESC');
    
    $stmt->execute();
    $cocktails = $stmt->fetchAll();

    $stmtcount = $db->prepare('SELECT count(*) AS `anzahl` FROM `cocktails`');
    $stmtcount-> execute();
    $resCount = $stmtcount->fetch()['anzahl'];
    
?>

<header  class="jumbotron bg-image px-5 py-3 position-relative" style="background :linear-gradient(90deg, rgba(0,0,0,1) 0%, rgba(255,255,255,0) 70%),url('images/design/bg4.jpg'); height: calc(100vh - 500px); background-size:100% 160%; background-position:100%; background-repeat: no-repeat;">
    <p class="display-5 text-light position-absolute top-50">Here you will find <?= $resCount ?> Cocktails.</p>
</header>

<div class="bg-main p-5">
    <main>
        <div class="row">
            <?php foreach($cocktails AS $cocktail): ?>
                
                <div class="col-md-3 py-3">
                    <div class="card col-md-12 bg-dark">
                        <!-- <img class="card-img-top" src="images/cocktails/maracuja.jpg" alt="Card image cap" width="300" height="300"> -->
                        <img class="card-img-top img-fluid" src="images/cocktails/<?= $cocktail['image']; ?>" alt="<?= $cocktail['name'];?>" >
                        <div class="card-body">
                        <h5 class="card-title  color-5"><?= e($cocktail['name']); ?></h5>
                        <p class="card-text text-light"><?= truncate(e($cocktail['summary']), 100); ?></p>
                        <a href="index.php?page=cocktail-read-more&id=<?= $cocktail['idc'] ?>">
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
        <!-- ADD A NEW COCKTAIL FORM -->
        <div class="row my-5">
            <p class="display-3 lead text-light py-3 my-3 color-6">Toast to Originality. Add Your Signature Cocktails to Our Collection!</p>
            <h2 class="pt-5 text-center">Add a new Cocktail</h2>
            <form action="auth/entries/insert.php" method="post" class="col-md-8 rounded-1 px-5 py-3 mx-auto">
                <div class="form-group p-1 mb-2">
                    <input type="text" name="name" id="name" class="form-control bg-dark  border-dark text-light" placeholder="Cocktails's name...">
                </div>
                <div class="form-group p-1 mb-2">
                    <input type="text" name="summary" id="summary" class="form-control bg-dark border-dark text-light" placeholder="Your Cocktails's in one sentence...">
                </div>
                <div class="form-group p-1 mb-2">
                    <textarea class="form-control bg-dark border-dark text-light" placeholder="Give the description and the recipe..." id="full_text" name="full_text" style="height: 100px"></textarea>
                </div>
                <div class="form-group p-1 mb-2">
                    <input type="number" name="category" id="category" class="form-control bg-dark border-dark text-light" placeholder="Your Cocktails's category ...(check the number bellow">
                    <small class="text-secondary">
                        <span class="badge bg-info text-dark">0.without cat</span>
                        <span class="badge bg-info text-dark">1.Cocktails with Rum</span>
                        <span class="badge bg-info text-dark">2. Cocktails mit Cognac</span>
                        <span class="badge bg-info text-dark">3.Cocktails with Wine</span>
                    </small>
                </div>
                <div class="form-group p-1 mb-2">
                    <input type="text" name="image" id="image" class="form-control bg-dark border-dark text-light" placeholder="Your Cocktails's image...">
                </div>
                <div class="p-1">
                    <?php 
                    // if((isset($_SESSION['id'])) && (isset($_SESSION['login']))):    
                    $login_not_yet_dev = true;        
                    if($login_not_yet_dev):            
                        ?> 
                    <button type="submit" class="btn btn-warning">Submit</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                    <?php else: ?>
                        <p class="alert bg-dark color-1  my-2 fw-fold bg-opacity-50 mx-auto" >Only registered members can add new Cocktails. please register!</p>
                    <?php endif;?>
                </div>  
            </form>
        </div>
       
    </main>



            