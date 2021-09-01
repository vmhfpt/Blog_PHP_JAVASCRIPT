
<?php
 require_once('controller/app.php');
 require_once('controller/homeController.php');
 
     
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
 <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>    
    </ul>
  </div>  
</nav>
<br>

<div class="container">
    <h4> Hello</h4>
<a href="add.php"><button type="button" class="btn btn-primary"> Add</button></a>
<table class="table table-striped">
    <thead>
      <tr>
        <th>STT</th>
        <th>Title</th>
        <th>Image</th>
        <th>Create Day</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
        <?php 
            foreach($itemResult as $key){
  ?>
            
 <tr>
        <td><?=$key['id']?></td>
        <td><?=$key['title']?></td>
        <td><img src="<?=$key['image']?>" width="50" height="50"> </td>
        <td><?=$key['create_time']?>  </td>
        <td><a href="home.php?delete=<?=$key['id']?>"><button type="button" class="btn btn-outline-danger">Delete</button></a></td>
        <td><a href="add.php?id=<?=$key['id']?>&active=edit"><button type="button" class="btn btn-outline-warning">Edit</button></a></td>
      </tr>
            
            
            <?php 
            }
        ?>
        
    
     
    </tbody>
    </table>
<ul class="pagination">
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
      echo '<li class="page-item"><a class="page-link" href="home.php?page='.($current_page - 1).'">Previous</a></li>';
   }
    for ($i = $Page_start; $i <= $Page_end; $i ++)  {
    ?>
          <li class="page-item  <?php 
     if ($i == $current_page){
         echo 'active';
     }
  ?>"><a class="page-link" href="home.php?page=<?=$i?>"><?=$i?></a></li> 
    <?php } ?>
    <?php
    if (($current_page + 2) <= ceil(count( $resultBlog )/$limit)){
        echo ' <li class="page-item"><a class="page-link" href="home.php?page='.($current_page + 1).'">Next</a></li>';
     }
?>
</div>

</body>
</html>

