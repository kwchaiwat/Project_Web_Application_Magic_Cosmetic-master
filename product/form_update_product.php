<?php include('../header2.php');?>
<?php include "../connect.php" ?>
<?php session_start(); ?>
<?php
$stmt = $pdo->prepare("SELECT * FROM product WHERE Product_ID = ?");
$stmt->bindParam(1, $_POST["Product_ID"]);
$stmt->execute();
$row = $stmt->fetch();
 ?>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<div class="container" style="margin-top: 25em;margin-bottom:20px; ">

<?php if($_SESSION["Username"]=='admin') { ?>
 <h2 class="font2">แก้ไขข้อมูลสินค้า</h2>
 <!-- ตั้งแต่ตรงนี้ -->
<!--    เอาข้างบนมาใส่ข้างล่างแล้วลบ ข้างบนออก   -->


<form action="action_updateproduct.php" class="card form-signin font2" style="width: 30rem;" method="post">
<input type="hidden" name="Product_ID" value="<?=$row["Product_ID"]?>">
     <p style="text-align: left;">ชื่อสินค้า :</p><input class="form-control" type="text" name="Product_name" id="Product_name" value="<?=$row["Product_name"]?>"><br>
     <p style="text-align: left;">ประเภทสินค้า :</p>
      <p style="text-align: center;"><input type="radio" value=1 name="ProType_ID" id="ProType_ID" required>เครื่องสำอาง<br></p>
      <p style="text-align: center;"><input type="radio" value=2 name="ProType_ID" id="ProType_ID" required>ผลิตภัณฑ์ทำความสะอาดใบหน้า<br></p>
      <p style="text-align: center;"><input type="radio" value=3 name="ProType_ID" id="ProType_ID" required>เวชสำอาจ<br></p>
<p style="text-align: left;">รายละเอียดสินค้า :</p> <br><textarea type="text" class="form-control" name="Product_detail" id="Product_detail"><?=$row["Product_detail"]?></textarea> <br>
<p style="text-align: left;">ราคาสินค้า : </p><input type="number" class="form-control" name="Product_price" id="Product_price" value="<?=$row["Product_price"]?>"><br>
<p style="text-align: left;">จำนวนคงคลัง :</p> <input type="number" class="form-control" name="Product_stock" id="Product_stock" value="<?=$row["Product_stock"]?>"><br>
<br>
<input type="submit" class="btn btn-lg font2" style="background-color: #ff5454;color: #ffffff;"  value="แก้ไขสินค้า">
</form>

</div>
<div class="container" style="margin-top: 25em;margin-bottom:20px; ">
<form action="action_updatepic.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="Product_ID" value="<?=$row["Product_ID"]?>">
<img src='pic_product/<?=$row["Product_pic"]?>' width='200'> <br>
<p style="text-align: left;"> เปลี่ยนรูปใหม่ : </p><input class="btn btn-secondary" type="file" name="Product_pic" id="Product_pic" required ><br>

<input type="submit" class="btn btn-lg font2" style="background-color: #ff5454;color: #ffffff;"  value="แก้ไขรูป">
</form>





<?php
}
else {
  echo "กรุณาเข้าสู่ผู้ดูแลระบบ";
  	//header("location: login.html");
}
?>
</div>
</body> </html>
