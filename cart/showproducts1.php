<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Product List</title>

</head>

<body>

  <form>
          <input type="text" name="keyword" maxlength="64" placeholder="Search">
          <input type="submit" value="ค้นหา">
  </form>
<table width="600" border="1" align="center" bordercolor="#666666">
  <tr>
    <td width="91" align="center" bgcolor="#CCCCCC"><strong>ภาพ</strong></td>
    <td width="200" align="center" bgcolor="#CCCCCC"><strong>ชื่อสินค้า</strong></td>
    <td width="44" align="center" bgcolor="#CCCCCC"><strong>ราคา</strong></td>
    <td width="100" align="center" bgcolor="#CCCCCC"><strong>จำนวนคงคลัง</strong></td>
    <td width="100" align="center" bgcolor="#CCCCCC"><strong>รายละเอียดสินค้า</strong></td>
  </tr>

  <?php
  //connect db
  include("connect.inc");
  if (!empty($_GET)){
    $value = '%'.$_GET["keyword"].'%';
    $sql = "select * from product where Product_name like '$value' ";
    $result = mysqli_query($conn, $sql);
    $a=0;
  }
  elseif(empty($_GET)){
    $sql = "select * from product order by Product_ID";  //เรียกข้อมูลมาแสดงทั้งหมด
    $result = mysqli_query($conn, $sql);
  }
  while($row = mysqli_fetch_array($result)){
    $a=$a+1;
  	echo "<tr>";
	  echo "<td align='center'><img src='product/pic_product/" . $row["Product_pic"] ." ' width='80'></td>";
	  echo "<td align='left'>" . $row["Product_name"] . "</td>";
    echo "<td align='center'>" .number_format($row["Product_price"],2). "</td>";
    echo "<td align='center'>" .number_format($row["Product_stock"]). "</td>";
    echo "<td align='center'><a href='cart\product_detail.php?Product_ID=$row[Product_ID]'>คลิก</a></td>";
	  echo "</tr>";
  }
  if (!empty($_GET&&$a==0))
    echo "<script>
    alert('ไม่พบรายการสินค้าที่ค้นหา');
    window.location.href='index.php';
    </script>";
  ?>
</table>
