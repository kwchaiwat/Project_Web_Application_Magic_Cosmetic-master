<?php include('../header2.php');?>
<?php include "../connect.inc" ?>
<?php
$sql	= "select * from shipping";
$query	= mysqli_query($conn, $sql);
if($_SESSION["UserType_ID"]=='2'){
?>
<html>
<head>
</head>
<body>
<div class="container" >
   <table width="1000"  height="200"  border="0" align="center" class="table-striped jumbotron font2 ">
    <tr>
       <th>ID</th>
       <th>รูปแบบการจัดส่ง</th>
       <th>ค่าจัดส่ง</th>
       <th>แก้ไขค่าจัดส่ง</th>
   </tr>
    <?php
    while($row = mysqli_fetch_array($query)){
     ?>
<tr>
  <td><?=$row["Shipping_ID"]?></td>
  <td><?=$row["Shipping_type"]?></td>
  <td><?=$row["cost"]?></td>
  <td>
    <form action="edit_shipping.php" method="POST">
      <input type="hidden" name="Shipping_ID" value="<?=$row["Shipping_ID"]?>">
      <button type="submit" class="btn" style="background-color:#ff5454; color: #ffffff" >แก้ไข</button>
    </form>
  </td>
</tr>
  <?php
    }
    ?>
  </table>
  <a class="btn btn-success font2" href="../index.php">ย้อนกลับ</a>

  </div>
</body>
</html>
<?php }
else {
  echo "กรุณาเข้าสู่ผู้ดูแลระบบ";
  	//header("location: login.html");
}
?>
