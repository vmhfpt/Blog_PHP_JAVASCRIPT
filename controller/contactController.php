
  
  
  
<?php
 $edit = false;
$link = $content = $category =  $name = '';
 if (!empty($_GET)){
     if(isset($_GET['id'])){
         $id = $_GET['id'];
         $resultBlog = $object->selectContentContactWhere($id) ;
        $name = $resultBlog[0]['name'];
        $link = $resultBlog[0]['link'];
        $content = $resultBlog[0]['content'];
        $category = $resultBlog[0]['id_category'];
     }
 }
if(isset($_GET['active'])){
     if($_GET['active'] == 'edit'){
         $edit = true;
     }
 }
 
$categoryResult = $object->selectCategoryContact();
  
  
//$object->insertBlog('ok1113 ', 'sjsjs', 'sjjs', 'kakaka', 4);
 
if(!empty($_POST)){

  if(isset($_POST['content'])){
        $content = $_POST['content'];
        
    }
  if(isset($_POST['category'])){
        $category = $_POST['category'];
        
    }
 if(isset($_POST['link'])){
        $link = $_POST['link'];
        
    }
  if(isset($_POST['name'])){
        $name = $_POST['name'];
        
    }
    if($edit == false){
//$object->insertBlog($title, $image, $content,$scription, $category);
header("Location: home.php");
die();
    } else { 
$object->updateContact($name, $content, $category, $link, $id);
header("Location: homeContact.php");
die();
    }
}
