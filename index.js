

function searchDown(){
    
$(".seacher").fadeIn(600);
}
 $('.close-ajax').click(function(){
$(".seacher").fadeOut (600);
    });
$(document).ready(function(){
   
$("a").click(function(){
     loadDelay();
    });
    
    loadDelay();
    function loadDelay(){
$(".over-flow").before('<div class="over-flows"></div>');
$(".over-flow").before('<i class="load-icon fa fa-spinner fa-spin"></i>') ;

setTimeout(function() {
        //alert("ok");
$( ".over-flows" ).remove();
$( ".load-icon" ).remove();
    }, 1500);
    }

    //Check to see if the window is top if not then display button
    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('.fa-arrow-up').fadeIn();
             $('.nav-bar').fadeOut();
        } else {
            $('.fa-arrow-up').fadeOut();
$('.nav-bar').fadeIn();
  
        }
    });
    
    //Click event to scroll to top
    $('.fa-arrow-up').click(function(){
        $('html, body').animate({scrollTop : 0},800);
        return false;
    });
    

    
    
    
 $(".over-flow").click(function(){
$(".over-flow").fadeOut(600);
 $(".list-menu").slideToggle(200);
       // alert("ok");
        $(".content-nav-bar").animate({
           opacity : "0.1",
            width : "10%"
        },400);
 
 $(".content-nav-bar").fadeOut(100);
$(".content").animate({
           width : "100%",
           position : "none",
           marginLeft : "0px"
        },300);
 });;
    $(".fa-bars").click(function(){
$(".over-flow").fadeIn(600);
$(".content-nav-bar").fadeIn(600);
       // alert("ok");
        $(".content-nav-bar").animate({
           opacity : "0.9",
            width : "85%"
            
        },400);
 
        $(".list-menu").slideToggle(2000);
 $(".content").animate({
           width : "80%",
           position : "relative",
           marginLeft : "20%"
        },1000);
    });
$(".fa-close").click(function(){
$(".over-flow").fadeOut(600);
 $(".list-menu").slideToggle(200);
       // alert("ok");
        $(".content-nav-bar").animate({
           opacity : "0.1",
            width : "10%"
        },400);
 
 $(".content-nav-bar").fadeOut(100);
$(".content").animate({
           width : "100%",
           position : "none",
           marginLeft : "0px"
        },300);
    });
    
});
