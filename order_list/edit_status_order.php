 <?php include('../header2.php');?>
<?php include "../connect.php" ?>
<?php
session_start();
$stmt = $pdo->prepare("SELECT * FROM order_head WHERE Order_ID= ? ");
$stmt->bindParam(1, $_POST["Order_ID"]);
$stmt->execute();
$row = $stmt->fetch();
 ?>
<html>
<head>
<meta charset="utf-8">
</head>
<body>


          <div class="container">

  <?php if($_SESSION["UserType_ID"]=='2') { ?>
        <h1 class="font2"> แก้ไขสถานะ | Edit Order</h1><br>

<div class="card  font2">
                        <form action="action_update_status.php" method="post" style="font-size: 20px;" >
                                     <input type="hidden" name="Order_ID" id="Order_ID"  value="<?=$row["Order_ID"]?>">
                                        <input type="hidden" name="Order_dttm" id="Order_dttm" value="<?=$row["Order_dttm"]?>">
                                        <input type="hidden" name="Order_name" id="Order_name" value="<?=$row["Order_name"]?>">
                                        <input type="hidden" name="Order_lastname" id="Order_lastname" value="<?=$row["Order_lastname"]?>">
                                        <input type="hidden" name="Order_addr" id="Order_addr" value="<?=$row["Order_addr"]?>">
                                        <input type="hidden" name="Order_district" id="Order_district" value="<?=$row["Order_district"]?>">
                                        <input type="hidden" name="Order_province" id="Order_province" value="<?=$row["Order_province"]?>">
                                        <input type="hidden" name="Order_email" id="Order_email" value="<?=$row["Order_email"]?>">
                                        <input type="hidden" name="Order_phone" id="Order_phone" value="<?=$row["Order_phone"]?>">
                                        <input type="hidden" name="Order_qty" id="Order_qty" value="<?=$row["Order_qty"]?>">
                                        <input type="hidden" name="Order_total" id="Order_total" value="<?=$row["Order_total"]?>">

                                                 <h2 class="btn" style="background-color:#ff5454; color: #ffffff; font-size: 30px" >รายการสั่งซื้อที่  : <?=$_POST["Order_ID"]?></h2><br>
                                               วัน-เวลา : <?=$row["Order_dttm"]?><br>
                                                ชื่อ :
                                                <?=$row["Order_fname"]?>
                                                <?=$row["Order_lname"]?> <br>
                                                ที่อยู่ : <?=$row["Order_addr"]?><br><br>
                                                สถานะชำระเงิน :<br>
                                                        <input type="radio" value=2 name="Order_status" id="Order_status" required><span class="btn btn-outline-warning">รอตรวจสอบการชำระเงิน </span><br>
                                                        <input type="radio" value=3 name="Order_status" id="Order_status" required><span class="btn btn-outline-success">ยืนยันการชำระเงิน</span> <br>
                                                <br>
                                                  <button type="submit" class="btn" style="background-color:#ff5454; color: #ffffff" >ยืนยัน</button><br>

                       </form>
<?php
}
else {
  echo "กรุณาเข้าสู่ผู้ดูแลระบบ";
  //header("location: login.html");
 }
 ?>

</div></div>
</body>
 </html>
