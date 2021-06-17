<?php include('../header1.php');?>
<?php
session_start();

error_reporting( error_reporting() & ~E_NOTICE );

if(!empty($_SESSION["Username"])){		// ถ้า เป็นสมาชิก


	$Product_ID = $_REQUEST['Product_ID'];
	$act = $_REQUEST['act'];




	if($act=='add' && !empty($Product_ID))
	{
		if(isset($_SESSION['cart'][$Product_ID]))
		{
			$_SESSION['cart'][$Product_ID]++;
		}
		else
		{
			$_SESSION['cart'][$Product_ID]=1;
		}
	}




	if($act=='remove' && !empty($Product_ID))  //ยกเลิกการสั่งซื้อ
	{
		unset($_SESSION['cart'][$Product_ID]);
	}



	if($act=='update')
	{
		$amount_array = $_POST['amount'];
		foreach($amount_array as $Product_ID=>$amount)
		{
			$_SESSION['cart'][$Product_ID]=$amount;
		}
	}
?>

<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8" />

                    <style>
                        .custab{
                            border: 1px solid #ccc;
                            padding: 5px;
                            margin: 5% 0;
                            box-shadow: 3px 3px 2px #ccc;
                            transition: 0.5s;
                            }
                        .custab:hover{
                            box-shadow: 3px 3px 0px transparent;
                            transition: 0.5s;
                            }
                </style>
<title>Shopping Cart</title>
</head>

<body class="Athiti">
<div class="container ">
	<div>

<form id="frmcart" name="frmcart" method="post" action="?act=update" >
  <table class="table table-striped custab jumbotron font2 " style="background-color: white">
    <tr>
      <td align="center" colspan="5" ><h2>ตะกร้าสินค้า</h2></td>
    </tr>
    <tr>
      <td class="font2" align="center">สินค้า</td>
      <td class="font2" align="center">ราคา</td>
      <td class="font2" align="center">จำนวน</td>
      <td class="font2" align="center">รวม(บาท)</td>
      <td class="font2" align="center">ลบ</td>
    </tr>




   <!-- ************************************************************************ -->
<?php
$total=0;
if(!empty($_SESSION['cart']))
{
	include("../connect.inc");
	foreach($_SESSION['cart'] as $Product_ID=>$qty)
	{
		$sql = "select * from product where Product_ID=$Product_ID";
		$query = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($query);
		$sum = $row['Product_price'] * $qty;
		$total += $sum;

//ส่วนลด
	//	include('discount.php');

		echo "<tr>";
		echo "<td width='334'>" . $row["Product_name"] . "</td>";
		echo "<td width='46' align='right'>" .number_format($row["Product_price"],2) . "</td>";
		echo "<td width='57' align='right'>";

		echo "<input type='text' name='amount[$Product_ID]' value='$qty' size='2' /></td>";


		echo "<td width='93' align='right'>".number_format($sum,2)."</td>";
		//remove product
		echo "<td width='46' align='center'><a class='btn btn-danger' href='cart.php?Product_ID=$Product_ID&act=remove'>ลบ</a></td>";
		echo "</tr>";
	}

	/*
		echo "<tr>";
			echo "<td colspan='3' bgcolor='#F9D5E3' align='center'><b>(สมาชิก)  ส่วนลด 10%</b></td>";
			echo "<td align='right' bgcolor='#F9D5E3'>"."<b>".number_format($discount,2)."</b>"."</td>";
			echo "<td align='left' bgcolor='#F9D5E3'></td>";
			echo "</tr>";
	*/

	echo "<tr>";
  	echo "<td colspan='3' bgcolor='#CEE7FF' align='center'><b>ราคารวม</b></td>";
  	echo "<td align='right' bgcolor='#CEE7FF'>"."<b>".number_format($total,2)."</b>"."</td>";
  	echo "<td align='left' bgcolor='#CEE7FF'></td>";
	echo "</tr>";

}
?>


<tr >
<td colspan="5" align="right"><input type="submit" name="button" id="button" class='btn btn-info btn-xs' value="คำนวนสินค้าใหม่" /></td>
   </tr>

<tr>
	</form>

 <form action="confirm.php" method="post">
	<td align="center" colspan="5" style="font-size: 18px;">
	<p style="font-size: 18px;">เลือกรูปแบบการจัดส่งสินค้า<br></p>
	<input type="radio" name="Shipping_ID" value="1" required>แบบลงทะเบียน |
	<input type="radio" name="Shipping_ID" value="2" required>ด่วนพิเศษ EMS

</td>

</tr>

<tr>
<td colspan="2" align="left"><a href="../index.php" class='btn btn-success btn-xs'><span class="glyphicon glyphicon-edit"></span>กลับหน้ารายการสินค้า</a></td>
<td colspan="5" align="right">

    <input type="submit" name="Submit2" value="สั่งซื้อ" class='btn btn-info btn-xs'  />
    </form>
</td>

</tr>




<!--

<tr>

<td colspan="4" align="left"><a href="../index.php" class='btn btn-success btn-xs'><span class="glyphicon glyphicon-edit"></span>กลับหน้ารายการสินค้า</a></td>

<td  align="right">
    <input type="submit" name="button" id="button" class='btn btn-info btn-xs' value="คำนวนสินค้าใหม่" />
		</form>
<form action="confirm.php" method="post">
    <input type="submit" name="submit" value="สั่งซื้อ" class='btn btn-info btn-xs'/>
</td>
</tr>
<td>
	<th>
	เลือกรูปแบบการจัดส่งสินค้า<br>
	<input type="radio" name="Shipping_ID" value="1" required>แบบลงทะเบียน
	<input type="radio" name="Shipping_ID" value="2" required>ด่วนพิเศษ ems
	</form>
</th>
</td> -->
</table>

</div>
</div>
<?php
	}			//ปิด ถ้า user มี
else {
	echo "<script type='text/javascript'>alert('กรุณาเข้าสู่ระบบก่อนเลือกสินค้า');
	window.location='../Authentication/login.html';
	</script>";
}
?>


</body>
</html>
