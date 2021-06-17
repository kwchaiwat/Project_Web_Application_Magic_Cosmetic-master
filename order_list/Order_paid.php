<?php include('../header1.php');?>
<?php include "../connect.php" ?>
<?php session_start(); ?>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<div class="container ">
<h1 class="font2" style="text-align: center;">รานการที่มีการชำระเงินถูกต้องแล้ว</h1>
<table width="1000"  height="200" style="margin-top: 35px; " border="0" align="center" class=" table-striped jumbotron font2 ">
<tr>
    <th>รหัสรายการสั่งซื้อ</th>
    <th>วันที่ เวลา</th>
    <th>จำนวน</th>
    <th>ราคาทั้งหมด</th>
    <th>สถานะ</th>
    <th>รหัส EMS</th>
    <?php
    if($_SESSION["UserType_ID"]=='2') {  //ถ้าเป็น admin มีเมนูแก้ไข status
    ?>
    <th>ประเภทการขนส่ง</th>

    <th>เพิ่มรหัสการจัดส่ง EMS</th>
    <?php  } ?>
    <th>แก้ไข สถานะ </th>
</tr>

<!-- **********************ดึงค่าของ order_head ***************************** -->
<?php
  $User_ID = $_SESSION["User_ID"];
  if($_SESSION["UserType_ID"]=='2'){
      $stmt = $pdo->prepare("SELECT * FROM order_ems LEFT JOIN order_head ON order_ems.Order_ID = order_head.Order_ID where order_head.Order_status='3' or order_head.Order_status='4' order by order_head.Order_ID");
  }
  $stmt->execute();
  while ($row = $stmt->fetch()) {
?>
<tr>
    <td><?=$row["Order_ID"]?></td>
    <td><?=$row["Order_dttm"]?></td>
    <td><?=$row["Order_qty"]?></td>
    <td><?=$row["Order_total"]?></td>
    <td><?php

                        $status=$row["Order_status"]; // ลองเปลี่ยนตัวเลขตรงนี้นะครับ เพื่อทดสอบ if else ที่เราได้เขียนไว้
                        if($status==1){
                            echo "<span class='btn btn-outline-danger'> กรุณาชำระเงิน และ แจ้งการโอน </span>";
                        }
                        elseif ($status==2) {
                            echo "<span class='btn btn-outline-warning'> รอตรวจสอบการชำระเงิน </span>";
                        }
                        elseif ($status==3) {
                          echo "<span class='btn btn-outline-success'> ชำระเงินถูกต้อง </span>";
                        }
                        elseif ($status==4) {
                          echo "<span class='btn btn-outline-info'> กำลังจัดส่ง </span>";
                        }
        ?>
    </td>
    <td><?=$row["Ems_code"]?></td>
    <td>
      <?php
        if($row['Shipping_ID']=='2'){
        echo "EMS";}
        else {
          echo "แบบลงทะเบียน";
        }
      ?>
    </td>
    <?php
         if($_SESSION["UserType_ID"]=='2') {
      ?>
           <td>
             <form action="order_update_ems.php" method="post">
               <input type="hidden" name="Order_ID" id="Order_ID" value="<?=$row["Order_ID"]?>">

               <input type="submit" value="
               <?php
                 if($row["Order_status"]==3)
                 {
                   echo "เพิ่ม";
                 }
                 else {
                   echo "แก้ไข";
                 }
               ?>
               " class='

               <?php
                 if($row["Order_status"]==3)
                 {
                   echo "
                   btn btn-info btn-xs";
                 }
                 else {
                   echo "
                   btn btn-warning btn-xs";
                 }
               ?>
               ' />
             </form>
           </td>

           <?php } ?>
    <?php
         if($row["Order_status"]=='3') {  //ถ้าจ่ายตังแล้วไม่สามารถยกเลิกได้
    ?>
    <td>
      <form action="edit_status_order.php" method="post">
        <input type="hidden" name="Order_ID" id="Order_ID" value="<?=$row["Order_ID"]?>">
        <input type="submit" value="แก้ไข" class='btn btn-info btn-xs' />
      </form>
    </td>
<?php }
  else {
    ?>
    <td>
    </td>
  <?php
  }
}
?>
</table>
<a href="order_head_list.php" class='btn btn-success btn-xs font2'>กลับหน้ารายการสินค้า</a>

</div>
<!-- ************************************* -->


</body>

</html>
