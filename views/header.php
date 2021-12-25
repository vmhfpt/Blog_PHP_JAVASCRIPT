 
            <div class="content">
 <?php 
            foreach($itemResult as $key){
  ?>
         <a href="result.php?id=<?=$key['id']?>">      <div class="news-blog">
                <h1 class="title-name"> <?=$key['title']?> </h1>
                <img class="img-title" src="<?=$key['image']?>" height="120" width="168">
                <span> <?=$key['scription']?> </span>
<div style="clear: both"></div>
                </div> </a>
  <?php 
            }
        ?>
  <div style="clear: both"></div>
            <div class="pagination">
                 <ul class="center-paginate">
                    <!-- <li > «     </li>
                     <li> 1</li>
                     <li class="active-paginate"> 2</li>
                     <li> 3</li>
                     <li>»     </li> -->
                     
<?php

    $Page_start = 1 ;
     if (($current_page - 2) > 0 ){
         $Page_start = $current_page - 2 ;
     }
     $Page_end = ceil(count($resultBlog)/$limit) ;
     if (($current_page + 2 <= ceil(count($resultBlog)/$limit))){
         $Page_end = $current_page + 2;
     } 
     if (($current_page - 2) <= 0 && $current_page + 1 <= ceil(count($resultBlog)/$limit)){
      $Page_end = $current_page + 1;
     }
     if (($current_page + 2) > ceil(count( $resultBlog)/$limit) && $current_page - 1 > 0){
      $Page_start = $current_page - 1 ;
     }
   if (($current_page - 2) > 0 ){
      echo '<li><a href="index.php?page='.($current_page - 1).'">«</a></li>';
   }
    for ($i = $Page_start; $i <= $Page_end; $i ++)  {
    ?>
          <li class="<?php 
     if ($i == $current_page){
         echo 'active-paginate';
     }
  ?>"><a href="index.php?page=<?=$i?>"><?=$i?></a></li> 
    <?php } ?>
    <?php
    if (($current_page + 2) <= ceil(count( $resultBlog )/$limit)){
        echo ' <li><a  href="index.php?page='.($current_page + 1).'">»</a></li>';
     }
?>
                     
                     
                 </ul>
            </div>