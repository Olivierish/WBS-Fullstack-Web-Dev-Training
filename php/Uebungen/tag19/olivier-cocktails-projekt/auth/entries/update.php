<?php 
session_start();

require_once dirname(__DIR__,2).'/inc/db_connect.php';
require_once dirname(__DIR__,2).'/inc/functions.php';


$page = 'edit';

if (!empty($_POST)) {
    $idc = '';
   if(isset($_POST['idcocktail'])) $idc = (string) $_POST['idcocktail'];
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
        $stmt = $db->prepare('UPDATE `cocktails` SET
                              `name` = :name,
                              `summary` = :summary,
                              `full_text` = :full_text,
                              `category` = :category,
                              `image` = :image,
                              `updated_at` = NOW()
                              WHERE `id` = :id
                            ');
        

        $stmt->bindValue('name', $name);
        $stmt->bindValue('summary', $summary); 
        $stmt->bindValue('full_text', $full_text); 
        $stmt->bindValue('category', $category);
        $stmt->bindValue('image', $image);
        $stmt->bindValue('id', $idc);
        $stmt->execute();
        $_SESSION['msg'] = 'Thank you! Your Cocktail is successfuly updated.';
    }
}

redirect('../../index.php?page=cocktail-read-more&id='.$idc);
 