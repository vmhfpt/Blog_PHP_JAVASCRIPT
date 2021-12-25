<?php
  if (!empty($_GET)){
      if (isset($_GET['page'])){
          $current_page = $_GET['page'] ;
      }
if (isset($_GET['delete'])){
          $id = $_GET['delete'] ;
          $object->deleteBlog($id);
header("Location: home.php");
die();
      }
  }

 $resultBlog = $object->selectContentContactAll();
 $limit = 5;
 $sumPaginate = count($resultBlog);
 $sumPage = $sumPaginate / $limit ;
 $itemResult = $object->paginationAdminContact($limit, $current_page) ;
 