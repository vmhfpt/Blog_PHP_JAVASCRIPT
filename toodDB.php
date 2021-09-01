<?php
 class mission extends dataBase {
     public function selectUser($id){
$sql = $this->connection->prepare("SELECT * FROM `accrount` WHERE id = ?");
$sql->bind_param("i", $id);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
     }
public function selectAllTable(){
        $sql = $this->connection->prepare("SELECT * FROM `accrount`");
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
 public function insertData($username, $password, $gmail){
$sql = $this->connection->prepare("INSERT INTO `accrount` (`id`, `username`, `password`, `email`) VALUES (NULL, ?, ?, ?)") ;
$sql->bind_param("sss", $username, $password, $gmail);
    return($sql->execute()) ;
 
 }
 public function selectData($username, $password){
$sql = $this->connection->prepare("SELECT * FROM `accrount` WHERE `username` = ? AND `password` = ?");
   $sql->bind_param("ss",$username, $password);
   
    $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
 }
 public function updataData($username, $password, $email, $id){
     
 }
 public function testAccrount($username, $email){
     $sql = $this->connection->prepare("SELECT * FROM `accrount` WHERE `username` = ?") ;
    $sql->bind_param("s",$username);
 $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        if(count($items) != 0 ){
            return(1);
        }
$sql = $this->connection->prepare("SELECT * FROM `accrount` WHERE `email` = ?") ;
    $sql->bind_param("s",$email);
 $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        if(count($items) != 0){
            return(2);
        }
        return(0);
 }

 }

 /*$object = new mission;
  $result = $object->selectData('moide6mo123', 'demopassword75');
  var_dump($result);*/
 //var_dump($object->selectAllTable());