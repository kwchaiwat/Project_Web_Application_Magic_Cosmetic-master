 <?php include('../header2.php');?> 
<?php include "../connect.inc" ?>
<?php
$Shipping_ID = $_POST['Shipping_ID'];
$sql	= "select * from shipping where Shipping_ID=$Shipping_ID";
$query	= mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);

?>
<html>
<head>
</head>
<body>
<div class="container">
<div class="card form-signin font2">

<form action="action_updateshipping.php" method="post">
  <h1>ค่าจัดส่ง <?=$row["Shipping_type"]?></h1><br>
  <input type="hidden" name="Shipping_ID" value="<?=$row["Shipping_ID"]?>">
  <input type="text" class="form-control" name="cost" value="<?=$row["cost"]?>">
  <br>
 <button type="submit" class="btn" style="background-color:#ff5454; color: #ffffff" >แก้ไข</button>
</form>
</div></div>
</body>
</html>
