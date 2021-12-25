<?php
 $edit = false;
$id_category = $image = $content = $category = $scription = $title = '';
 if (!empty($_GET)){
     if(isset($_GET['id'])){
         $id = $_GET['id'];
         $resultBlog = $object->selectWhereBlog($id);
        $title = $resultBlog[0]['title'];
        $image = $resultBlog[0]['image'];
        $content = $resultBlog[0]['content'];
        $scription = $resultBlog[0]['scription'];
        $id_category = $resultBlog[0]['id_category'];
     }
 }
if(isset($_GET['active'])){
     if($_GET['active'] == 'edit'){
         $edit = true;
     }
 }
 $categoryResult = $object->selectCategory('all') ;
  
//$object->insertBlog('ok1113 ', 'sjsjs', 'sjjs', 'kakaka', 4);
 
if(!empty($_POST)){
    if(isset($_POST['image'])){
        $image = $_POST['image'];
        
    }
  if(isset($_POST['content'])){
        $content = $_POST['content'];
        
    }
  if(isset($_POST['category'])){
        $category = $_POST['category'];
        
    }
  if(isset($_POST['scr'])){
        $scription = $_POST['scr'];
        
    }
  if(isset($_POST['title'])){
        $title = $_POST['title'];
        
    }
    if($edit == false){
$object->insertBlog($title, $image, $content,$scription, $category);
header("Location: home.php");
die();
    } else {
$object->updateBlog($id, $title, $image, $content,$category, $scription);
header("Location: home.php");
die();
    }
}
