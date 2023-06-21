<?php
    $stmt = $db->prepare('SELECT *, cocktails.created_at AS datum FROM `cocktails` INNER JOIN `users` ON 
                            cocktails.id_user= users.id 
                            ORDER BY  cocktails.id DESC LIMIT 0,3');
    $stmt->execute();
    $cocktails = $stmt->fetchAll();
    // var_dump($cocktails);   
?>

<header  class="jumbotron bg-image px-5 py-3 position-relative" style="background :linear-gradient(90deg, rgba(0,0,0,1) 0%, rgba(255,255,255,0) 70%),url('images/design/bg1.jpg'); height: calc(100vh - 500px); background-size:100% 160%; background-position:100%; background-repeat: no-repeat;">
   
    <div class="position-absolute top-50">
    <h1 class="display-5 text-light">Cocktails from the World </h1>
    <p class="col-md-8 fs-4 text-light">
    Welcome to the Cocktails Blog, here you will discover the art of mixology and indulge in the finest cocktail recipes.


    </p>
    <button class="btn bg-warning">Login</button>
    <button class="btn bg-warning">Register</button>
    </div>
</header>

    <div class="bg-main p-5">
    <main>
        <!-- <h1 class="color-1 fs-2 fw-bold">Online Training</h1> -->
        <div id="content">
            <div class="row">
            <p class="display-3 lead text-light pb-5 my-3">Explore the art of crafting exquisite cocktails and elevate your drinking experience...</p>
            </div>
            <div class="row">
            <?php foreach($cocktails AS $cocktail): ?>
            
                <div class="col-md-6">
                        <div class="picture-section p-5 pt-0 position-relative"  style="background :linear-gradient(0deg, rgba(0,0,0,1) 0%, rgba(255,255,255,0) 60%),url('images/cocktails/<?= $cocktail['image'] ?>'); width:100%; height:300px; background-size:100% 160%; background-position:100%; background-repeat: no-repeat;">
                            <div class="hero-section position-absolute bottom-0">
                                <h3 class="h3 color-5 text-center fw-bold"><?= $cocktail['name'] ?></h2>
                                <p class="text-light"><?= $cocktail['summary'] ?></p>
                            </div>
                        </div>
                </div>
            <?php endforeach; ?>
            </div>
            <div class="row">
            <p class="display-3 lead text-light py-3 my-3">Discover more ...</p>
            <div class="col-md-6">
                <button class="btn bg-warning btn-lg">More Cocktails</button>
            </div>
            

            </div>
        </div>

    <hr class="my-5">




</main>