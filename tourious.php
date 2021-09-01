<?php require_once('views/footer.php');
require_once('controller/app.php');
 require_once('controller/homeController.php');
  $resultTourious = $object->selectTourious();
?>
<style>
    .tourious {
        margin-top : 60px;
        padding-left : 30px;
    }
    .tourious h2 {
        margin-top : 12px;
    }
    .category-tourious {
        margin-top : 30px;
        border-radius: 8px;
        width: 90%;
        height : 300px;
box-shadow: 8px 6px 0px 0px #00FFBE;
        
    }
    .category-tourious img {
        border-radius: 8px;
        
    }
    .category-tourious p {
        color : #919191;
        margin-bottom: 12px;
    }
    .category-tourious h3,p,b {
        margin-left : 15px;
        margin-top : 12px;
    }
    .category-tourious b {
        color : red;
    
    }
</style>
 
<!--<div class="tourious">
 <span > Home / Tourious</span>
    <h2> khoa hoc cua toi</h1>
    <div class="category-tourious">
        <img src="c.jpg" width ="100%" height="170">
        <h3> Programming C++</h3>
        <p> language proraming C++ important for your word ,this tourius include 34 </p>
        <b> 36 Tourious</b>
    </div>
</div>-->
   <?php
      foreach ($resultTourious as $key){
    ?>
<div class="tourious">
    <?php
    
    if($key['id'] == 1){
        echo '    <span>Home / Tourious </span>
    <h2> Khoa hoc cua toi </h2>  ';
    }
    ?>

    <div class="category-tourious">
        <img src="<?=$key['image']?>" width ="100%" height="170">
        <h3> <?=$key['name']?></h3>
        <p> <?=$key['description']?> </p>
        <b> <?=$key['quantity']?> Tourious</b>
    </div>
</div>
    
    
    
    <?php
      }
   ?>

<?php require_once('views/contact.php');
?>


  
         