<?php 
    if(isset($_GET['id'])){
        $id = e($_GET['id']);

        $stmt = $db -> prepare('SELECT * FROM `cocktails` WHERE `id` = :id');
        $stmt -> bindValue(':id', $id);
        $stmt -> execute();
        $cocktail = $stmt->fetch();

    }
?>

<div class="row my-5">
            <h2 class="pt-5 text-center">Update a Cocktail informations</h2>
            <form action="auth/entries/update.php" method="post" class="col-md-8 rounded-1 px-5 py-3 mx-auto">
                <div class="form-group p-1 mb-2">
                    <input type="hidden" name="idcocktail" id="idcocktail" class="form-control bg-dark  border-dark text-light" value="<?= $cocktail['id']?>">
                </div>
                <div class="form-group p-1 mb-2">
                    <input type="text" name="name" id="name" class="form-control bg-dark  border-dark text-light" placeholder="Cocktails's name..." value="<?= $cocktail['name']?>">
                </div>
                <div class="form-group p-1 mb-2">
                    <input type="text" name="summary" id="summary" class="form-control bg-dark border-dark text-light" placeholder="Your Cocktails's in one sentence..." value="<?= $cocktail['summary']?>">
                </div>
                <div class="form-group p-1 mb-2">
                    <textarea class="form-control bg-dark border-dark text-light" placeholder="Give the description and the recipe..." id="full_text" name="full_text" style="height: 300px">
                        <?= $cocktail['full_text']?>
                    </textarea>
                </div>
                <div class="form-group p-1 mb-2">
                    <input type="number" name="category" id="category" class="form-control bg-dark border-dark text-light" placeholder="Your Cocktails's category ...(check the number bellow" value="<?= $cocktail['category']?>">
                    <small class="text-secondary">
                        <span class="badge bg-info text-dark">0.without cat</span>
                        <span class="badge bg-info text-dark">1.Cocktails with Rum</span>
                        <span class="badge bg-info text-dark">2. Cocktails mit Cognac</span>
                        <span class="badge bg-info text-dark">3.Cocktails with Wine</span>
                    </small>
                </div>
                <div class="form-group p-1 mb-2">
                    <input type="text" name="image" id="image" class="form-control bg-dark border-dark text-light" placeholder="Your Cocktails's image..." value="<?= $cocktail['image']?>">
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