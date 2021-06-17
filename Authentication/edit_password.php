<?php include "../connect.php" ?>
<?php session_start();?>
<?php
$stmt = $pdo->prepare("UPDATE user SET Password=? where User_ID=?");
$stmt->bindParam(1, password_hash($_POST['Password'],PASSWORD_DEFAULT));
$stmt->bindParam(2, $_POST['User_ID']);
$stmt->execute();
if ($stmt->execute()){
  if($_SESSION["UserType_ID"]=='2'){
    header("location: list_user.php");
  }
  else{
    header("location: ../index.php");
    }
}
?>
