<?php require_once('views/footer.php');

require_once('controller/app.php');
 require_once('controller/homeController.php');
 
  if (!empty($_GET)){
      if (isset($_GET['id'])){
          $id = $_GET['id'];
      }
  }
 $blogResult = $object->selectWhereBlog($id);
$idCategoryVieo = $blogResult[0]['id_category'];

$resultVideo = $object->selectVideo($idCategoryVieo);
$resultComment = $object->selectComment($id);
$resultRanDom = $object->autoRandomBlog(    $idCategoryVieo,$object->selectCategory(4)[0] ['name']) ;
// die();
// var_dump($idCategoryVieo);
?>
<style>
  .list-url {
      padding-left : 20px;
  }
   .blog-container {
 
       margin-top : 59px;
       width: 100%;
       
       
   }
   .add-comment {
       margin-top : 30px;
display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
   }
  .add-comment input {
 font-family: Monospace;
      margin-top : 12px;
      width : 300px;
      height: 38px;
     
      border : 2px solid #00FFB5;
      padding-left : 20px;
  }
  .add-comment input:hover {
      transition: 0.4s;
      border: 3px solid #FFAD00;
  }
   .add-comment span {
 font-family: Monospace;
 color : red ;
 position: relative;
 top : -5px ;
   }
   .add-comment button {
       background: #00CE40;
       border: 1px solid black;
       font-family: Monospace;
       color : white;
       padding: 12px;
   }
   .show-cmt {
       
       
       width : 100%;
       
       
       font-family: Monospace;
   }
   .show-cmt h3 {
       font-size: 20px;
       margin : 12px 0px 12px 0px;
   }
   .user {
      margin-right : 8px;
   float : left;
       border : 2px solid #000000;
       width : 33px;
       height: 33px;
justify-content: center;
    align-items: center;
    display: flex;
    font-size: 20px;
    color : white;
background-image: linear-gradient(to right, #FF003D, #D6A700);
   }
   .content-cmt {
       margin-top : 30px;
       border-top : 1px solid #313131;
       padding-top : 13px;
   }
   .content-cmt span {
       float : left;

   }
   .container-cmt {
       margin-top : 30px ;
       padding-left : 20px;
border-top : 2px solid #FFD625;
   
   }
   .content-cmt i {
       color : #959595;
       position: relative;
       top : 5px;
   }
   .content-cmt d {
       margin-top : 903px;
   }
   .more-blog {
       margin-top : 50px;
       padding-left : 20px;
   }
   .more-blog h2 {
       border-left: 3px solid  #FF5C00;
       padding-left : 3px;
   }
   .more-blog span {
       color : #0075E9;
       font-size: 16px;
   }
   .more-blog img {
       float : left;
       margin-right : 15px;
       box-shadow: 8px 6px 0px 0px #525252;
   }
   .more {
       margin-top : 15px;
      
   }
 .more-video {
     padding-top : 40px;
     border-top : 1px dotted #000000;
       margin-top : 50px;
       padding-left : 20px;
   }
   .more-video h2 {
       border-left: 3px solid  #C0B000;
       padding-left : 3px;
   }
   .more-video span {
       font-size: 16px;
       color : #0075E9;
   }
   .more-video img {
       border-right : 3px solid  #FF1A00;
       float : left;
       margin-right : 15px;
       box-shadow: 8px 6px 0px 0px #FEFF28;
   }
   .add-video {
       margin-top : 15px;
   }
   .more i {
       color : #525252 !important;
       margin-left : 135px ;
       position : relative;
       bottom: 14px;
    
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
 <span > <b>Home</b> / <?= $blogResult[0]['title']?></span>
    </div>
    <div class="content-result">
<?= $blogResult[0]['content']?>
   </div>
    <div class="more-blog">
      
        
    
        <h2> Tin lien quan</h2>
        
  <?php
        
        foreach ($resultRanDom as $key){
        
    ?>
    <a href="result.php?id=<?=$key['id']?>">    <div class="more">
             <img src="<?=$key['image']?>" width="120" height="80"> 

             <span>  <?=$key['title']?></span> 
 
<div style="clear:both"></div>
<i> Vu Minh Hung</i>
        </div> </a>
  <?php
        }
    ?>
    </div>
    <div class="more-video">
        <h2> Video Lien quan</h2>
           <div class="add-video">
             <img src="c.jpg" width="120" height="60">
             <span> this is title for blog </span>
<div style="clear:both"></div>
        </div>
 <div class="add-video">
             <img src="c.jpg" width="120" height="60">
             <span> this is title for blog </span>
<div style="clear:both"></div>
        </div>
        <?php
        foreach ($resultVideo as $key){
        ?>
 <div class="add-video">
             <img src="<?=$key['image']?>" width="120" height="60">
             <span> <?=$key['name']?> </span>
<div style="clear:both"></div>
        </div>
            
        <?php
        }
        
        
        ?>
    </div>
    <div class="container-cmt">
    <div class="show-cmt">
        <h3> <?=count($resultComment)?> Comment  </h3>
        <?php
           foreach ($resultComment as $key){
          
              if ($key['idUser'] != 0){
                 $resultUserName = $object->selectUser($key['idUser']);
                 $name = $resultUserName[0]['username'];
              } else {
                  $name = $key['name'];
                  
              }
        ?>

       <div class="content-cmt">
            <div class="user"> <?=$name[0]?></div>
            <span> <?=$name?></span><br/>
            <i> <?=$key['created_at']?></i>
            <div style="clear : both;margin : 20px"></div>
            <p> <?=$key['content_comment']?></p>
        </div>
        <?php
           }
        
        ?>
  
    </div>
    </div>
    <div class="add-comment">
        
         <form>
             <input placeholder="Enter Name"name="ok" type="text"> <br/>
             <br/> <span> * Required</span> <br/>
<input placeholder="Enter email"name="ok" type="text"><br/>
 <br/> <span> * Required</span> <br/>
<input placeholder="Messenger"name="ok" type="text"><br/>
 <br/> <span> * Required</span> <br/>
             <button> POST COMMENT</button>
         </form>
         
    </div>
</div>
<?php 
 
require_once('views/contact.php');

?>


  
         