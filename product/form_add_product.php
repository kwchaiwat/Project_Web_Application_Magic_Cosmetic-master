<?php include('../header2.php');?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Add Product</title>
</head>


<body>
<div class="container" style="margin-top: 25em;margin-bottom:20px; ">

 <h2 class="font2">เพิ่มข้อมูลสินค้า</h2>
      <form action="action_saveproduct.php" class="card form-signin font2" style="width: 30rem;" method="post" enctype="multipart/form-data">

      <p style="text-align: left;">ชื่อสินค้า :</p><input class="form-control" type="text" name="Product_name" id="Product_name" ><br>
      <p style="text-align: left;">ประเภทสินค้า :</p>
            <p style="text-align: center;"><input type="radio" value=1 name="ProType_ID" id="ProType_ID">เครื่องสำอาง<br></p>
      			<p style="text-align: center;"><input type="radio" value=2 name="ProType_ID" id="ProType_ID">ผลิตภัณฑ์ทำความสะอาดใบหน้า<br></p>
      			<p style="text-align: center;"><input type="radio" value=3 name="ProType_ID" id="ProType_ID">เวชสำอาจ<br></p>
      <p style="text-align: left;">รายละเอียดสินค้า :</p><textarea class="form-control" type="text" name="Product_detail" id="Product_detail">
      </textarea> <br>
      <p style="text-align: left;">ราคาสินค้า : </p> <input class="form-control" type="number" name="Product_price" id="Product_price" ><br>
      <p style="text-align: left;">จำนวนคงคลัง : </p> <input class="form-control" type="number" name="Product_stock" id="Product_stock"><br>
     <p style="text-align: left;">รูป :</p>
      <input class="btn btn-secondary" type="file" name="Product_pic" id="Product_pic" ><br>

      <br>
      <input type="submit" value="เพิ่มสินค้า" class="btn btn-lg font2" style="background-color: #ff5454;color: #ffffff; "> </form>

</div>
</body>


</html>
