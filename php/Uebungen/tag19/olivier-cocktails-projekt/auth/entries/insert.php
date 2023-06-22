<?php 
session_start();
print_r($_POST);

require_once dirname(__DIR__,2).'/inc/db_connect.php';
require_once dirname(__DIR__,2).'/inc/functions.php';

if (!empty($_POST)) {
    $name = '';
   if(isset($_POST['name'])) $name = (string) $_POST['name'];
   $summary = '';
   if(isset($_POST['summary'])) $summary = (string) $_POST['summary'];

    $full_text = '';
    if(isset($_POST['full_text'])) $full_text = (string) $_POST['full_text'];

    $category = '';
    if(isset($_POST['category'])) $category = (string) $_POST['category'];

    $image = '';
    if(isset($_POST['image'])) $image = (string) $_POST['image'];


    
    if((!empty($name)) && (!empty($summary)) && (!empty($full_text)) && (!empty($category)) && (!empty($image))){
        $stmt = $db->prepare('INSERT INTO `cocktails` (`id_user`,`name`, `summary`, `full_text`, `category`, `image`) 
                                VALUES(:id_user, :name, :summary, :full_text, :category, :image)');
        
        $stmt->bindValue('id_user', rand(1,2));
        $stmt->bindValue('name', $name);
        $stmt->bindValue('summary', $summary); 
        $stmt->bindValue('full_text', $full_text); 
        $stmt->bindValue('category', $category);
        $stmt->bindValue('image', $image);
        $stmt->execute();
        $_SESSION['msg'] = 'Thank you! Your Cocktail is successfuly added.';
    }
}

redirect('../../index.php?page=cocktails');
