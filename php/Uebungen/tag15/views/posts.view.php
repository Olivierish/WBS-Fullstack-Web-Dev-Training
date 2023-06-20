<?php
    $stmt = $db->prepare('SELECT * FROM `posts` order by `id` DESC');
    $stmt->execute();
    $posts = $stmt->fetchAll();

    $stmtcount = $db->prepare('SELECT count(*) AS `anzahl` FROM `POSTS`');
    $stmtcount-> execute();
    $resCount = $stmtcount->fetch()['anzahl'];
    var_dump($posts[0]['created_at']);
?>

<header  class="jumbotron bg-image px-5 py-3 position-relative" style="background :linear-gradient(90deg, rgba(0,0,0,1) 0%, rgba(255,255,255,0) 70%),url('images/bg3.jpg'); height: calc(100vh - 500px); background-size:100% 160%; background-position:100%; background-repeat: no-repeat;">
    <p class="display-5 text-light position-absolute top-50">Posts(<?= $resCount ?> posts).</p>
</header>

<div class="bg-main p-5">
    <main>
        <div class="row">
        <?php foreach($posts AS $post): ?>
            <div class="col-md-3 py-3">
                <div class="card col-md-12 bg-dark">
                    <!-- <img class="card-img-top" src="images/cocktails/maracuja.jpg" alt="Card image cap" width="300" height="300"> -->
                    <img class="card-img-top img-fluid" src="images/cocktails/<?= e($post['image']); ?>" alt="<?= e($post['title']); ?>" >
                    <div class="card-body">
                    <h5 class="card-title  color-5"><?= e($post['title']); ?></h5>
                    <p class="card-text text-light"><?= truncate(e($post['content']), 100); ?></p>
                    <a href="<?= dirname(__DIR__).'id='.$post['id'] ?>">
                        <!-- <button type="button" class="btn btn-sm btn-secondary">Read More</button>     -->
                    </a>
                </div>
                    <div class="card-footer d-flex justify-content-between">
                    <small class="text-secondary"><?= date("M j Y",strtotime(e($post['created_at']))); ?></small>
                    <small class="text-secondary"><?= e($post['autor']); ?></small>
                    
                    </div>
                </div>
            </div>
            <?php endforeach; ?>        
        </div>
    </main>



            