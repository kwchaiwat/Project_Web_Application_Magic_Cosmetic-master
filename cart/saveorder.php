
<?php
	session_start();
    include("../connect.inc");
		if(!empty($_SESSION["Username"])){	// ถ้า เป็นสมาชิก
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Confirm</title>
</head>
<body>
<!--สร้างตัวแปรสำหรับบันทึกการสั่งซื้อ -->
<?php

	$fname = $_REQUEST["User_fname"];
  $lname = $_REQUEST["User_lname"];
	$address = $_REQUEST["User_add"];
	$email = $_REQUEST["User_email"];
	$phone = $_REQUEST["User_tel"];
	$total_qty = $_REQUEST["total_qty"];
	$total = $_REQUEST["total"];
	$Shipping_ID = $_REQUEST["Shipping_ID"];
	$total_and_ems = $_REQUEST["total_and_ems"];
	date_default_timezone_set('asia/bangkok');
	$dttm = Date("Y-m-d H:i:s");
	$User_ID = $_SESSION['User_ID'];
	$status = 1;


			//บันทึกการสั่งซื้อลงใน order_head
	mysqli_query($conn, "BEGIN");
	$sql1	= "insert into order_head values(null,'$User_ID', '$dttm', '$fname', '$lname', '$address', '$email', '$phone', '$total_qty', '$total_and_ems','$status','$Shipping_ID')";
	$query1	= mysqli_query($conn, $sql1);
	//ฟังก์ชั่น MAX() จะคืนค่าที่มากที่สุดในคอลัมน์ที่ระบุ ออกมา หรือจะพูดง่ายๆก็ว่า ใช้สำหรับหาค่าที่มากที่สุด นั่นเอง.
	$sql2 = "select max(Order_ID) as Order_ID from order_head where Order_fname='$fname' and Order_email='$email' and Order_dttm='$dttm' ";
	$query2	= mysqli_query($conn, $sql2);
	$row = mysqli_fetch_array($query2);
	$Order_ID = $row["Order_ID"];
//PHP foreach() เป็นคำสั่งเพื่อนำข้อมูลออกมาจากตัวแปลที่เป็นประเภท array โดยสามารถเรียกค่าได้ทั้ง $key และ $value ของ array
	foreach($_SESSION['cart'] as $Product_ID=>$qty)
	{
		$sql3	= "select * from product where Product_ID=$Product_ID";
		$query3	= mysqli_query($conn, $sql3);
		$row3	= mysqli_fetch_array($query3);
		$total = $row3['Product_price']*$qty;
		$count = mysqli_num_rows($query3);
	//บันทึกการสั่งซื้อลงใน order_detail
		$sql4	= "insert into order_detail values(null, '$Order_ID', '$Product_ID', '$qty', '$total')";
		$query4	= mysqli_query($conn, $sql4);
		$quantity = $row3['Product_stock'];
		$a = $quantity-$qty;

		$Ems_code ='-';
		$sql5	= "insert into order_ems values('$Order_ID', '$Ems_code')";
		$query5	= mysqli_query($conn, $sql5);

		$Pic_order = '-';
		$sql6	= "insert into order_pic values('$Order_ID', '$Pic_order','$dttm')";
		$query6	= mysqli_query($conn, $sql6);


		//ตัดสต๊อก
		if($a>0){ // เช็คว่ามีสินค้าเพียงพอ
		  for($i=0; $i<$count; $i++){
					  $have =  $row3['Product_stock'];
					  $stc = $have - $qty;
					  $sql9 = "UPDATE product SET Product_stock=$stc WHERE Product_ID=$Product_ID ";
					  $query9 = mysqli_query($conn, $sql9);

					  $have =  $row3['Product_sold'];
					  $stc = $have + $qty;
					  $sql9 = "UPDATE product SET Product_sold=$stc WHERE Product_ID=$Product_ID ";
					  $query9 = mysqli_query($conn, $sql9);
					  }
			/*   stock  */
	if($query1 && $query4){
		mysqli_query($conn, "COMMIT");
		$msg = "บันทึกข้อมูลเรียบร้อยแล้ว ";
		foreach($_SESSION['cart'] as $Product_ID)

		{
			//unset($_SESSION['cart'][$Product_ID]);
			unset($_SESSION['cart']);

		}
	}
	else{
		mysqli_query($conn, "ROLLBACK");
		$msg = "บันทึกข้อมูลไม่สำเร็จ กรุณาติดต่อเจ้าหน้าที่ค่ะ ";
	}

?>
<script type="text/javascript">
	alert("<?php echo $msg;?>");
	window.location ='../index.php';
</script>

<?php
} //ปิด ถ้ามีสินค้า
		else{ //ไม่มีสินค้า



				mysqli_query($conn, "ROLLBACK");
				$sql5	= "DELETE `order_detail`,`order_head` FROM `order_detail` INNER JOIN `order_head` WHERE `order_detail`.`Order_ID` = `order_head`.`Order_ID` AND `order_detail`.`Order_ID` = $Order_ID";
				$query5	= mysqli_query($conn, $sql5);

				?>

				<script type="text/javascript">
						alert("สินค้าในคลังไม่เพียงพอ โปรดติดต่อ ปลื้มปริ่มมมม");
					window.location ='cart.php';
					</script><?php
		}

	} //ปิด foreach
}			//ปิด ถ้า user มี
	else {
	echo "<script type='text/javascript'>alert('กรุณาเข้าสู่ระบบก่อนเลือกสินค้า');
	window.location='../Authentication/login.html';
	</script>";
	}

?>


</body>
</html>
