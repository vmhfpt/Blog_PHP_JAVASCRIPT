<?php 
  class admin extends mission {
public function selectWhereBlog($id){
$sql = $this->connection->prepare("SELECT * FROM `blog` WHERE id = ?");
 $sql->bind_param("i", $id);
$sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
 }
 
 public function selectBlog(){
$sql = $this->connection->prepare("SELECT * FROM `blog`");
   
    $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
 }
 public function paginationAdmin($limit, $page){
     $page -- ;
     $page = ($page * $limit);
$sql = $this->connection->prepare("SELECT * FROM `blog` LIMIT ? OFFSET ?");
    $sql->bind_param("ii", $limit, $page );
    $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
 }
 public function paginationAdminContact($limit, $page){
     $page -- ;
     $page = ($page * $limit);
$sql = $this->connection->prepare("SELECT * FROM `content_contact` LIMIT ? OFFSET ?");
    $sql->bind_param("ii", $limit, $page );
    $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
 }
 public function selectCategory($status){
     if($status == 'all'){
         $sql = $this->connection->prepare("SELECT * FROM `category` ") ;
     } else {
$sql = $this->connection->prepare("SELECT * FROM `category` WHERE id = ? ") ;
      $sql->bind_param("i", $status);
     }
 $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
     }
     public function insertBlog($title, $image, $content, $scription, $category){
         $date = date('Y-m-d') ;
     $sql = $this->connection->prepare("INSERT INTO `blog` (`id`, `title`, `scription`, `id_category`, `image`, `content`, `create_time`) VALUES (NULL, ?, ?, ?, ?, ?, ?)");
        $sql->bind_param("ssisss",$title, $scription, $category, $image, $content , $date);
 $sql->execute();
     }
     public function deleteBlog($id){
$sql = $this->connection->prepare("DELETE  FROM `blog` WHERE id = ?");
 $sql->bind_param("i", $id);
    $sql->execute();
     }
     public function updateBlog($id, $title, $image, $content, $category, $scription){
  $date = date('Y-m-d') ;
 $sql = $this->connection->prepare("UPDATE `blog` SET `title` = ?, `scription` = ?, `id_category` = ?, `image` = ?, `content` = ?, `create_time` = ? WHERE `blog`.`id` = ?") ;
 $sql->bind_param("ssisssi",$title, $scription, $category, $image, $content , $date, $id);
 $sql->execute();
     }
     public function selectComment($id){
      
$sql = $this->connection->prepare("SELECT * FROM `comment` WHERE id_Blog = ?");
 $sql->bind_param("i", $id);
$sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
     }
     public function selectCategoryContact(){
$sql = $this->connection->prepare("SELECT * FROM `category_contact`");
$sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
     }
public function selectCategoryContactId($id){
$sql = $this->connection->prepare("SELECT * FROM `category_contact` WHERE id = ?");
 $sql->bind_param("i", $id);
$sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
     }
     public function selectContentContact($id){
$sql = $this->connection->prepare("SELECT * FROM `content_contact` WHERE id_category = ?");
 $sql->bind_param("i", $id);
$sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
     }
public function selectContentContactWhere($id){
$sql = $this->connection->prepare("SELECT * FROM `content_contact` WHERE id = ?");
 $sql->bind_param("i", $id);
$sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
     }
     
public function selectContentContactAll(){
$sql = $this->connection->prepare("SELECT * FROM `content_contact`");
 
$sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
     }
     
     
public function selectTourious(){
$sql = $this->connection->prepare("SELECT * FROM `tourious`");
$sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
     }
public function selectVideo($id){
$sql = $this->connection->prepare("SELECT * FROM `video` WHERE id_Category = ?");
 $sql->bind_param("i", $id);
$sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
     }
public function autoRandomBlog($id, $name){
$sql = $this->connection->prepare("SELECT * FROM `blog` WHERE `id_category` = ? OR `content` LIKE '%".$name."%' LIMIT 10");
 $sql->bind_param("i", $id);
$sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
     }
     public function updateContact($name, $content, $category, $link, $id){
         
$sql = $this->connection->prepare("UPDATE `content_contact` SET `name` = ?, `id_category` = ?, `link` = ?, `content` = ? WHERE `id` = ?") ;
 $sql->bind_param("sissi",$name, $category, $link, $content , $id);
 $sql->execute();
     }
 }
  