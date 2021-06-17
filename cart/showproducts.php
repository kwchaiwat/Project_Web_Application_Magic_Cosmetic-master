<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Magic Cosmetic!</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap-4.1.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
    <link href="css/btn.css" rel="stylesheet">
    <link href="css/font.css" rel="stylesheet">
    <link href="albu.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kanit|Mitr|Prompt|Sriracha" rel="stylesheet">

  </head>

<body>

   <div class="container">


 <div class="row">

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
?>

 <div class="col-md-4">
<div class="card form-signin font2" style="width: 20rem;margin: 20px;" >
  <img class="card-img-top"  style="border-radius:20px;padding: 15px;" src=" product/pic_product/<?=$row["Product_pic"] ?>" >
  <div class="card-body" style="text-align: center;">
    <h5 class="card-title"><?=$row["Product_name"]?></h5>
    <p class="card-text"><?=$row["Product_detail"]?></p>
    <h5 class="card-title"><?=number_format($row["Product_price"],2) ?></h5>
    <h5 class="card-title">จำนวนคงคลัง <?=$row["Product_stock"]?></h5>
    <h5 class="card-title">จำนวนถูกสั่ง <?=$row["Product_sold"]?></h5>
   <p style="text-align: center;"><a class="btn btn-info" href="cart\product_detail.php?Product_ID=<?=$row["Product_ID"]?>" role="button">View details &raquo;</a></p>
  </div>
</div>
</div>

<?php
}
?>

<?php if (!empty($_GET&&$a==0))
    echo "<script>
    alert('ไม่พบรายการสินค้าที่ค้นหา');
    window.location.href='index.php';
    </script>";
  ?>




 </div>

 </div>

</body>
