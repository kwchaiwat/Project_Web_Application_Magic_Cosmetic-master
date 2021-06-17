<?php include('../header2.php');?>
<?php include "../connect.php" ?>
<?php session_start(); ?>
<?php if($_SESSION["UserType_ID"]=='2') { ?>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
  <!--
  <th>ชื่อ</th>
  <th>นามสกุล</th>
  <th>ที่อยู่</th>
  <th>อีเมล์</th>
  <th>เบอร์โทรศัพท์</th>    -->
<div class="container ">
<h3 class="font2">ประวัติการแก้ไขรายการสั่งซื้อ</h3>
<table width="1000"  height="200" style="margin-top: 35px;" border="0" align="center" class="table-striped jumbotron font2 ">
<tr>
    <th>รหัสสมาชิก</th>
    <th>ชื่อสมาชิก</th>
    <th>รหัสรายการสั่งซื้อ</th>
    <th>วันที่แก้ไข</th>
</tr>

<!-- **********************ดึงค่าของ order_head ***************************** -->
<?php
  $User_ID = $_SESSION["User_ID"];
  $stmt = $pdo->prepare("SELECT * FROM manage_order LEFT JOIN user ON manage_order.User_ID = user.User_ID ");
  $stmt->execute();
  while ($row = $stmt->fetch()) {
?>
<tr>
    <td><?=$row["User_ID"]?></td>
    <td><?=$row["Username"]?></td>
    <td><?=$row["Order_ID"]?></td>
    <td><?=$row["edit_order_date"]?></td>
</tr>
<?php }
?>
</table>
<!-- ************************************* -->

<a class="btn btn-success font2" href="../index.php">ย้อนกลับ</a>
</div>
</body>

</html>
<?php
}
else {
  echo "กรุณาเข้าสู่ผู้ดูแลระบบ";
  	//header("location: login.html");
}
?>
