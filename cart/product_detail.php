<!DOCTYPE html>
<html>
<head>
<?php include('../header1.php');?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Product Detail</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body >

<?php
//connect db
    include("../connect.inc");
  $Product_ID = $_GET['Product_ID']; //สร้างตัวแปร Product_ID เพื่อรับค่า

  $sql = "select * from product where Product_ID=$Product_ID";  //รับค่าตัวแปร Product_ID ที่ส่งมา
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);

?>

<div class="card form-signin" style="width: 18rem; margin-top:35px; ">
  <img class="card-img-top" style="border-radius:20px;" src="../product/pic_product/<?=$row["Product_pic"]?>" >
  <div class="card-body">
    <h5 class="card-title"><?=$row["Product_name"]?></h5>
    <p class="card-text"><?=$row["Product_detail"]?></p>
    <h5 class="card-title"><?=number_format($row["Product_price"],2) ?></h5>
    <a href='cart.php?Product_ID=<?=$row['Product_ID']?>&act=add' class="btn btn-outline-success"> เพิ่มลงตะกร้าสินค้า</a><br><br>
    <a href="../index.php" class="btn btn-success"> กลับไปหน้ารายการสินค้า</a>
  </div>
</div>



</body>
</html>
