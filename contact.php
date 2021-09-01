
<?php 

require_once('controller/app.php');
//  require_once('controller/homeController.php');
 

require_once('views/footer.php');


 if (!empty($_GET)){
      if (isset($_GET['id'])){
          $id = $_GET['id'];
      }
  }
 $contactResult = $object->selectContentContactWhere($id) ;

?>
<style>
  .list-url {
      padding-left : 20px;
  }
   .blog-container {
 
       margin-top : 59px;
       width: 100%;
       
       
   }
   
 .content-result {
       margin-top : 30px;
       padding-left : 25px;
       width: 90%;
       line-height: 30px;
   }
   
</style>
<div class="blog-container">
    <div class="list-url"
 <span > <b>Home</b> / <?= $contactResult[0]['name']?></span>
    </div>
    <div class="content-result">
<?= $contactResult[0]['content']?>
   </div>
</div>


<?php  //require_once('views/header.php');
?>
<?php require_once('views/contact.php');
?>


  
         