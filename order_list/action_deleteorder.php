<?php include "../connect.inc" ?>
<?php include "../connect.php"?>
<?php


$Order_ID = $_GET['Order_ID'];

/* คืนจำนวนสินค้า */
	$stmt = $pdo->prepare("SELECT * FROM order_detail LEFT JOIN product ON order_detail.Product_ID = product.Product_ID where Order_ID=$Order_ID ");
	$stmt->execute();
	$Product_ID_array = array();
	$add_stock = array();
	$add_sold = array();
	$count=0;
	while ($row = $stmt->fetch()) {
	$Product_ID_array[] = $row['Product_ID'];
	$add_stock[] = $row['Product_stock'] + $row['Detail_qty'];
	$add_sold[] = $row['Product_sold'] - $row['Detail_qty'];
	$count = $count+1;
 }
 for($i=0;$i<$count;$i++){
	$sql2	= "UPDATE product set Product_stock=$add_stock[$i],Product_sold=$add_sold[$i] where Product_ID=$Product_ID_array[$i]";
	$query2	= mysqli_query($conn, $sql2);
 }
 /* ลบ */
$sql	= "DELETE `order_detail`,`order_head` FROM `order_detail` INNER JOIN `order_head` WHERE `order_detail`.`Order_ID` = `order_head`.`Order_ID` AND `order_detail`.`Order_ID` = $Order_ID";
$query	= mysqli_query($conn, $sql);
$sql3	= "DELETE FROM `order_ems` where `Order_ID` = $Order_ID";
$query3	= mysqli_query($conn, $sql3);
if($query){
	header("location: order_head_list.php");
}


?>
