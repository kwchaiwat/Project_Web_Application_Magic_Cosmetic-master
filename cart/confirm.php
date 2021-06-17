<?php include('../header1.php');?>
<?php
	session_start();
    include("../connect.inc");
		if(!empty($_SESSION["Username"])){	// ถ้า เป็นสมาชิก
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<title>Checkout</title>
</head>
<body>
<div class="container ">
<form id="frmcart" name="frmcart" method="post" action="saveorder.php">
  <table width="800"  height="150" style="margin-top: 35px; " border="0" align="center" class=" table-striped jumbotron font2 ">
    <tr>
      <td width="1558" colspan="4" bgcolor="#FFDDBB">
      <h4>รายการสินค้า</h4></td>
    </tr>
    <tr>
      <td bgcolor="#F9D5E3">สินค้า</td>
      <td align="center" bgcolor="#F9D5E3">ราคา</td>
      <td align="right" bgcolor="#F9D5E3">จำนวน</td>
      <td align="center" bgcolor="#F9D5E3">รวม/รายการ</td>
    </tr>
<?php
	$total=0;
	$total_qty = 0;
	foreach($_SESSION['cart'] as $Product_ID=>$qty)
	{
		$sql	= "select * from product where Product_ID=$Product_ID";
		$query	= mysqli_query($conn, $sql);
		$row	= mysqli_fetch_array($query);
		$sum	= $row['Product_price']*$qty;
		$total	+= $sum;
		$total_qty += $qty;

		//ส่วนลด
		include('shipping.php');


    echo "<tr>";
    echo "<td>" . $row["Product_name"] . "</td>";
    echo "<td align='center'>" .number_format($row['Product_price'],2) ."</td>";
    echo "<td align='right'>$qty</td>";
    echo "<td align='center'>".number_format($sum,2)."</td>";
    echo "</tr>";
	}

	echo "<tr>";
		echo "<td colspan='3' bgcolor='#F9D5E3' align='right'><b>รูปแบบการจัดส่ง   ".$row2['Shipping_type']."</b></td>";
		echo "<td align='center' bgcolor='#F9D5E3'>"."<b>".number_format($ems,2)."</b>"."</td>";
		echo "<td align='left' bgcolor='#F9D5E3'></td>";
		echo "</tr>";

	echo "<tr>";
    echo "<td  align='right' colspan='3' bgcolor='##66ffff'><b>รวม</b></td>";
    echo "<td align='center' bgcolor='#66ffff'>"."<b>".number_format($total_and_ems,2)."</b>"."</td>";
    echo "</tr>";
?>
</table>
<!-- hide -->

<input name="total" type="hidden" value="<?php echo $total;?>"/>
<input name="total_qty" type="hidden"  value="<?php echo $total_qty;?>"/>
<input name="Shipping_ID" type="hidden" value="<?php echo $Shipping_ID;?>"/>
<input name="total_and_ems" type="hidden"  value="<?php echo $total_and_ems;?>"/>

<!-- hide -->

</table>
<p>
<table border="0" cellspacing="0" align="center" width="500"  height="175" class="table-striped custab jumbotron font2 ">
<tr>
	<td colspan="2" bgcolor="#CCCCCC">ที่อยู่ในการจัดส่ง (กรณีที่ไม่ใช้ที่อยู่เดิมกรุณาแก้ไข)</td>
</tr>

<tr>
    <td bgcolor="#EEEEEE">ชื่อ</td>
    <td><input name="User_fname" type="text" id="User_fname" value="<?=$_SESSION["User_fname"]?>" required/></td>
</tr>
<tr>
    <td bgcolor="#EEEEEE">นามสกุล</td>
    <td><input name="User_lname" type="text" id="User_lname" value="<?=$_SESSION["User_lname"]?>" required/></td>
</tr>
<tr>
    <td width="22%" bgcolor="#EEEEEE">ที่อยู่</td>
    <td width="78%">
    <textarea name="User_add" cols="35" rows="5" id="User_add" required><?=$_SESSION["User_add"]?></textarea>
    </td>
</tr>
<tr>
  	<td bgcolor="#EEEEEE">อีเมล</td>
  	<td><input name="User_email" type="email" id="User_email" value="<?=$_SESSION["User_email"]?>" required/></td>
</tr>
<tr>
  	<td bgcolor="#EEEEEE">เบอร์ติดต่อ</td>
  	<td><input name="User_tel" type="text" id="User_tel" value="<?=$_SESSION["User_tel"]?>" required /></td>
</tr>
<tr>
	<td colspan="2" align="center" bgcolor="#CCCCCC">
	<input type="submit" name="Submit2" class="btn btn-lg  font2" style="background-color: #ff5454" value="สั่งซื้อ" />
</tr>

</table>
</form>




<?php
	}			//ปิด ถ้า user มี
	else {
	echo "<script type='text/javascript'>alert('กรุณาเข้าสู่ระบบก่อนเลือกสินค้า');
	window.location='../Authentication/login.html';
	</script>";
	}
?>
</div>
</body>
</html>
