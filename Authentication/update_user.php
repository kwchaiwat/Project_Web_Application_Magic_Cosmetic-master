<?php include "../connect.php" ?>
<?php session_start();?>
<?php
$stmt = $pdo->prepare("UPDATE user SET Username=?,User_fname=?,User_lname=?,User_add=?,User_email=?,User_tel=? where User_ID=?");
$stmt->bindParam(1, $_POST['Username']);
$stmt->bindParam(2, $_POST['User_fname']);
$stmt->bindParam(3, $_POST['User_lname']);
$stmt->bindParam(4, $_POST['User_add']);
$stmt->bindParam(5, $_POST['User_email']);
$stmt->bindParam(6, $_POST['User_tel']);
$stmt->bindParam(7, $_POST['User_ID']);
$stmt->execute(); // เริ่มเพิ่มข้อมูล
if ($stmt->execute()){
  if($_SESSION["UserType_ID"]=='2'){
      header("location: list_user.php");
  }
  else{
    header("location: ../index.php");
    }
}
?>
