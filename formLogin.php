


<!DOCTYPE html>
<html lang="vi">
    <head>
<meta charset="utf-8">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <meta charset="utf-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link type="text/css" rel="stylesheet" href="public/index.css">
        <title> This is my web </title>
    </head>
   
    <body>
<div id="vl"></div>
<div class="success-task-bar">
<i class="fa fa-check"></i>
<span class="success-span-task"></span>
</div>
</div>

        <div class="form-login">
            <h3>Login form</h3>
            <form id="myForm" method="POST" >
                 <div class="input-used">
<i class="material-icons icon-used" >account_box</i>
<input name="username" id="user" type="text" placeholder="Username">
                 </div>
            <br/>  <span id="errorUsed" class="error-span"> * Enter in here</span>
                 <div style="clear : both;
                 margin-top: 20px"></div>
 <div class="input-password">
     
<i class="material-icons icon-password">lock</i>
<input name="password" style="width: 60% !important" id="password" autocomplete="off" type="password" placeholder="Password ">
<i onclick="removeEye()" class="material-icons icon-eye">visibility</i>
<!--<i class="material-icons">visibility_off</i>-->
                 </div>
 <br/>  <span id="errorPw" class="error-span"> * Enter in here</span>
<br/> <div class="remember">
<input type="checkbox" id="check-box"  name="vehicle1">
<span> Remember me</span>
 </div>
 <a href="" class="forgot">Forgot password?</a>
   <br/> <button id="submit" type="button"> Login</button>
<a href="resign.html" ><button id="resign" type="button"> Resign</button></a>
            </form>
          <br>  <span style="font-size: 15px">Demo validate form by Code Editor Mod </span>
        </div>
<a href="controller/selectController.php"> sever</a>
<script type="text/javascript" src="public/index.js"></script>

    </body>
</html>