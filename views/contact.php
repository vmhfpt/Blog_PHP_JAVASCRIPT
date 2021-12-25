 
<?php
  $resultContact = $object->selectCategoryContact(); 
 // var_export($resultContact); die();
?>
   <div class="contact">
        <?php 
        
  foreach ($resultContact as $key){
      echo '<h2 class="title-contact">
                    '.$key['name'].'
                </h2> ';
        echo '<ul>';
  $idCategory = $key['id'];
       $contentContact = $object->selectContentContact($idCategory);
  foreach ($contentContact as $key){
      if($key['content'] == '' || $key['content'] == null){
          $link = $key['link'];
      }else {
          $link = 'contact.php?id='.$key['id'];
      }
        ?>
    
                  <a href="<?=$link?>">  <li> <?=$key['name']?></li> </a>
                   
        
        <?php
  }
   echo '</ul>';
  }
  ?>
        

                <div class="more-tag">
                    <h2> Tags</h2>
                    <?php
                    $result = $object->selectCategory('all');
                    foreach($result as $key){
                    
                    ?>
                  <a href="index.php?id=<?=$key['id']?>"> <span>  <?=$key['name']?>, </span></a>
                    <?php } ?>
                </div>
                <div class="copy-right">
                    <span> Design by Vu Minh Hung</span>
                </div>
            </div>
            </div>
          
        </div>
        <style>
            
 .messenger {
     position: fixed ;
     bottom: 25px;
     left : 25px;
 }
 .messenger img {
     width: 60px;
     height: 60px;
 border-radius: 30px;
 box-shadow: 2px 2px 2px 2px #525252;

 }
        </style>
        <div class="messenger">
             <a href="https://m.me/hung.v.minh.7">  <img src="https://kingbond.vn/images/socials/messenger-icon.gif" > </a>
        </div>
<i class="fa fa-arrow-up" aria-hidden="true"></i>
       <script type="text/javascript" src="public/index.js"></script>
    </body>
</html>