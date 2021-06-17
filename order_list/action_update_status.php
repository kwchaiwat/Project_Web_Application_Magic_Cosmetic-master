<?php
include "../connect.php";
session_start();
 ?>
<?php
if($_SESSION["UserType_ID"]=='2') {
$stmt = $pdo->prepare("UPDATE order_head SET Order_status=? WHERE Order_ID=?");
$stmt->bindParam(1, $_POST["Order_status"]);
$stmt->bindParam(2, $_POST["Order_ID"]);

$User_ID_manage= $_SESSION['User_ID'];
$Order_ID_manage= $_POST["Order_ID"];
date_default_timezone_set('asia/bangkok');
$Status_date_manage = Date("Y-m-d G:i:s");
$stmt2 = $pdo->prepare("INSERT INTO manage_order VALUES (?, ?, ?)");
$stmt2->bindParam(1, $User_ID_manage);
$stmt2->bindParam(2, $Order_ID_manage);
$stmt2->bindParam(3, $Status_date_manage);
$stmt2->execute();
          if($stmt->execute()){
          header("location: order_head_list.php");
        }
}
        else {
          echo "กรุณาเข้าสู่ผู้ดูแลระบบ";
         }
?>
