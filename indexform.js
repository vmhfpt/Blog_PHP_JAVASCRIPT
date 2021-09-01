

var testInputUser = true ;
var testInputPw = true;
$(document).ready(function(){
//$('#check-box').attr('checked','checked');
 /*
var lol = $( "#check-box:checked" ).length;
 alert(lol);
 console.log(lol);
 */
function testLengthPassword(text){
   var lengthPw = text.length;
   if (lengthPw <= 6){
       return(1);
   }
   if (lengthPw >= 7 && lengthPw <= 11){
       return(2);
   }
   if (lengthPw >= 12 && lengthPw <= 15){
       return(3);
   }
   return(false);
}
function testSpecialCharacter(text){
for(var i = 0; i < text.length; i++){
        var ascill = text[i].charCodeAt(0);
           if((ascill >= 0 && ascill <= 47 && ascill != 32) ||(ascill >= 58 && ascill <= 64) || (ascill >= 91 && ascill <= 96) || (ascill >= 123)){
               return(false);
           }

    }
}
function testLengthCharacter(text){
 if(text.length < 8 || text.length > 13){
         return(false);
    }
}
function testNullInput(text){
if (text == null || text == "") {
       return(false);
} 
} 
function testSpace(text){
for(var i = 0; i < text.length; i++){
        if(text[i].charCodeAt(0) == 32){
           return(false)  ; 
        }
    }
}
function efectFormDefault(value){
    if(value == 1){
       $(".input-used").css('border', '2px solid #00FFB6');
   $("#errorUsed").html("") ;
    } else {
  $(".input-password").css('border', '2px solid #00FFB6');
   $("#errorPw").html("") ;
$("#errorPw").css('color', 'red ');
    }
}
function testValueAll(text){
    
    var number = false;
    var charText = false;
for(var i = 0; i < text.length; i++){
        var ascill = text[i].charCodeAt(0);
        if(ascill >= 48 && ascill <= 57){
            number = true;
        }
        if ((ascill >= 65 && ascill <= 90) ||  (ascill >= 97 && ascill <=  122)){
            charText = true;
        }
    }
    if (number == false || charText == false){
        return (false);
    }

}
    function validateForm(){
       efectFormDefault(1) ;
     
var text = $("#user").val() ;

if(testSpace(text) == false) {
$("#errorUsed").html("* Ten dang nhap khong chua dau cach") ;
 $(".input-used").css('border', '2px solid red');
      return (false); 
   }
   if(testSpecialCharacter(text) == false){
$("#errorUsed").html("* Ten dang nhap khong duoc chua ky tu dac biet") ;
 $(".input-used").css('border', '2px solid red');
      return (false); 
   }
if (testNullInput(text) == false) {
       $("#errorUsed").html("* khong duoc de trong") ;
 $(".input-used").css('border', '2px solid red');
       return (false)
    }
    
   if (testLengthCharacter(text) == false){ 
$("#errorUsed").html("* Ten dang nhap tu 8 den 13 ky tu") ;
 $(".input-used").css('border', '2px solid red');
      return (false); 
   }
   if(testValueAll(text) == false){
$("#errorUsed").html("* Ten dang nhap phai ca chu cai va so") ;
 $(".input-used").css('border', '2px solid red');
      return (false); 
   }
   return(true);

}
  function validateFormPassword(){
var text = $("#password").val() ;
   efectFormDefault(2);
if(testSpace(text) == false) {
$("#errorPw").html("* Mat khau khong chua dau cach") ;
 $(".input-password").css('border', '2px solid red');
      return (false); 
   }
   if(testSpecialCharacter(text) == false){
$("#errorPw").html("* Mat khau khong duoc chua ky tu dac biet") ;
 $(".input-password").css('border', '2px solid red');
      return (false); 
   }
if (testNullInput(text) == false) {
       $("#errorPw").html("* khong duoc de trong") ;
 $(".input-password").css('border', '2px solid red');
       return (false);
    }
 if(testLengthPassword(text) == 1){
$("#errorPw").html("* Yeu") ;
 $(".input-password").css('border', '2px solid red');
$("#errorPw").css('color', 'red');
      return (false); 
   }
 if(testLengthPassword(text) == 2){
$("#errorPw").html(" Binh thuong") ;
 $(".input-password").css('border', '2px solid #FFD500');
$("#errorPw").css('color', '#FFD500');
   }
 if(testLengthPassword(text) == 3){
$("#errorPw").html("Manh") ;
 $(".input-password").css('border', '2px solid #00FFB6');
$("#errorPw").css('color', '#00D324');
   }
if(testLengthPassword(text) == false){
$("#errorPw").html("* Mat khau toi da 15 ky tu") ;
 $(".input-password").css('border', '2px solid red');
      return (false); 
   }
  if(testValueAll(text) == false){
$("#errorPw").html("* Mat khau phai ca chu cai va so") ;
 $(".input-password").css('border', '2px solid red');
$("#errorPw").css('color', 'red');
      return (false); 
   }
  
   return(true);
  }
$("#user").keyup(function(){
    testInputUser =  validateForm() ;
     
  });

$("#password").keyup(function(){
    testInputPw = validateFormPassword() ;
  });
$("#resign").click(function(){
$("#vl").before('<div class="over-flow"></div>');
$("#vl").before('<i class="load-icon fa fa-spinner fa-spin"></i>') ;
setTimeout(function() { 
        //alert("ok");
$( ".over-flow" ).remove();
$( ".load-icon" ).remove();
 

ajaxRequest1() ;

    }, 1500);
function ajaxRequest1(){
var jsonForm = $("#myForm").serializeArray();
  $.ajax({
                url: 'controller/insertController.php',
                type: 'POST',
                data:jsonForm,
        success : function (result){
           $("#vl").html(result);
            return(0);
    result = JSON.parse(result);
        
 //$("#vl").html(result['status']);
          if(result['status'] == 'error'){
             
    }
            
          else if(result['status'] == 'correct'){
              

          }
        }
    });
}
}) ;
$("#submit").click(function(){

if(testInputPw == true && testInputUser == true ){
$("#vl").before('<div class="over-flow"></div>');
$("#vl").before('<i class="load-icon fa fa-spinner fa-spin"></i>') ;

setTimeout(function() { 
        //alert("ok");
$( ".over-flow" ).remove();
$( ".load-icon" ).remove();
 
    
ajaxRequest() ;

    }, 1500);
}

function ajaxRequest(){
var jsonForm = $("#myForm").serializeArray();
  $.ajax({
                url: 'controller/selectController.php',
                type: 'POST',
                data:jsonForm,
        success : function (result){
           //$("#vl").html(result);
            
    result = JSON.parse(result);
        
 //$("#vl").html(result['status']);
          if(result['status'] == 'error'){
              var error_text = '<div class="error-task-bar">' + 
              '<i class="fa  fa-exclamation-triangle"></i>' +
              ' <span class="error-span-task">Tai khoan hoac mat khau khong chinh xac!</span></div>' ;

$( ".error-task-bar" ).remove();
$("#vl").before(error_text) ;
            
$(".error-task-bar").slideDown();
            
setTimeout(function() { 
$(".error-task-bar").slideUp();
// 

    }, 2500 );
            
          } else if(result['status'] == 'correct'){
              
              $(".success-span-task").html("Xin chao " + result['name']);
$(".success-task-bar").slideDown();
window.location="http://hungvu2000.tk";

          }
        }
    });
}

}) ;
});
 
function add(){
$('#password').get(0).type = 'password';
var cart = '<i onclick="removeEye()" class="material-icons icon-eye">visibility</i>' ;
$('.hident-eye').empty() ;
$('#password').after(cart);
 

}
function removeEye(){
$('#password').get(0).type = 'text';
var cart = '<i onclick="add()" class="material-icons hident-eye">visibility_off</i>' ;
$('.icon-eye').remove();
$('#password').after(cart);
    
}