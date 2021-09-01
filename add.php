<?php
 require_once('controller/app.php');
 require_once('controller/addController.php');
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <script src="public/ckeitor/ckeditor.js"></script>
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

 <form action="" method="POST">
    <div class="form-group">
      <label >Title:</label>
      <input value="<?=$title?>" type="text" class="form-control" placeholder="Enter title" name="title">
    </div>
    <div class="form-group">
      <label >Scription:</label>
      <input value="<?=$scription?>" type="text" class="form-control"  placeholder="Enter scription" name="scr">
    </div>
 <div class="form-group">
      <label >Image :</label>
      <img id="update" src="<?=$image?>" width="200" height="100"> <br/> <br/>
      <input value="<?=$image?>" type="text" class="form-control" id="image" placeholder="Enter link image" name="image">
    </div>
  
<div class="form-group">
      <label> Category</label>
      <select class="form-control" id="sel1" name="category">
       <!-- <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>-->
        <?php 
           foreach ($categoryResult as $key){
        ?>

               <option <?php if($key['id'] == $id_category) echo 'selected'; ?> value="<?=$key['id']?>"><?=$key['name']?></option>';
        <?php
           }
        ?>
      </select>
      </div>
<div class="form-group">
      <label for="comment">Content:</label>
      <textarea class="form-control" rows="5" id="content" name="content"> <?=$content?></textarea>
    </div>
  <button type="submit" class="btn btn-primary mb-2">Submit</button>
  
</form>
</div>

 <script>
 
$(document).ready(function(){
    $("#image").keyup(function(){
       var value = this.value ;
       $("#update").attr("src", value);
     
  });
}) ;
 
     CKEDITOR.replace('content');
     </script>
</body>
</html>

