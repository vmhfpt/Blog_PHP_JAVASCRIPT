<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery Change Image Source on Click</title>
<style>
    .card{
        margin: 30px;
    }
</style>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
$(document).ready(function(){
    $("img").click(function(){
        // Change src attribute of image
        $(this).attr("src", "https://nuuneoi.com/blog/989/cover.jpg");
    });    
});
</script>
</head>
<body>
    <div class="card">
        <img src="https://techsors.com/wp-content/uploads/2016/02/ts_article_4-top-programming-languages-1020x600.jpg"  width="299" height="500">
    </div>
</body>
</html>