<?php
function heading($bg_img, $title){
?>
<header class="bg-image bg-light px-5 position-relative" style="background-image :radial-gradient(at top left, #56565600 0%, #000000 100%), url('images/<?=$bg_img?>'); height: 30vh; background-size:cover;">
    
    
    <div  class="jumbotron col-md-6   position-absolute bottom-0 end-0">
                <div class="ps-0 pe-3 pb-3 mt-2">
                <h1 class="display-5 text-light text-center"><?= $title ?></h1>    
                </div>
                
            </div>
    </header>
<?php
}
?>

<?php
function classActiv($page, $value=''){
    return ($page === $value) ? 'active' : '';
}
?>

