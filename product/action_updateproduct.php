<?php include "../connect.php"
 ?>
 <?php session_start(); ?>
<?php

/***** save manage ********/
$User_ID_manage =  $_SESSION['User_ID'];
$Product_ID_manage = $_POST["Product_ID"];
date_default_timezone_set('asia/bangkok');
$Status_date_manage = Date("Y-m-d G:i:s");

					$stmt2 = $pdo->prepare("INSERT INTO manage VALUES (?, ?, ?)");
					$stmt2->bindParam(1, $User_ID_manage);
					$stmt2->bindParam(2, $Product_ID_manage);
					$stmt2->bindParam(3, $Status_date_manage);
					$stmt2->execute();

/***************************************************************************************/
$stmt = $pdo->prepare("UPDATE product SET Product_name=?, ProType_ID=?,Product_detail=?,Product_price=?, Product_stock=? WHERE Product_ID=?");
$stmt->bindParam(1, $_POST["Product_name"]);
$stmt->bindParam(2, $_POST["ProType_ID"]);
$stmt->bindParam(3, $_POST["Product_detail"]);
$stmt->bindParam(4, $_POST["Product_price"]);
$stmt->bindParam(5, $_POST["Product_stock"]);
$stmt->bindParam(6, $_POST["Product_ID"]);
if($stmt->execute())
header("location: list_product.php");

?>
