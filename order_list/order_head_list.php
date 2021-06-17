<?php include('../header1.php');?>
<?php include "../connect.php" ?>
<?php session_start(); ?>
<html>
  <head>
  <meta charset="utf-8">
      <script>
          function confirmDelete(Order_ID) {
                var ans = confirm("Do you want to delete the item? " + Order_ID);
                if (ans==true)
                document.location = "action_deleteorder.php?Order_ID=" + Order_ID;
          }
      </script>
  </head>
<body>
<div class="container ">
<h1 class="font2" style="text-align: center;">ใบสั่งซื้อ</h1>

<?php
    if($_SESSION["UserType_ID"]=='2') {  //ถ้าเป็น admin มีเมนูแก้ไข status
?>
<a href="Order_paid.php" class="btn btn-info" role="button">รายการที่จ่ายแล้ว</a>
<?php
  }
?>
<table width="1000"  height="200" style="margin-top: 35px; " border="0" align="center" class=" table-striped jumbotron font2 ">
<tr>
    <th>รหัสรายการสั่งซื้อ</th>
    <th>วันที่ เวลา</th>
    <th>จำนวน</th>
    <th>ราคาทั้งหมด</th>
    <th>สถานะจ่ายเงิน</th>

    <?php
        if($_SESSION["UserType_ID"]=='1') {  //ถ้าเป็น user มีเมนู
    ?>
    <th>รหัส EMS</th>
    <th>แจ้งการชำระเงิน</th>
<?php }else {
?>

<th>ประเภทการขนส่ง</th>
  <th>รูปยืนยันการชำระเงิน<br><p style="color:red;">คลิกที่รูปเพื่อดาวน์โหลด</p></th>
<?php
}
?>

    <th>รายละเอียดการสั่งซื้อ</th>
    <?php
        if($_SESSION["UserType_ID"]=='2') {  //ถ้าเป็น admin มีเมนูแก้ไข status
    ?>
    <th>แก้ไขสถานะ</td>
    <?php } ?>
    <th>ยกเลิกรายการสั่งซื้อ</th>
</tr>

<!-- **********************ดึงค่าของ order_head ***************************** -->
<?php
  $User_ID = $_SESSION["User_ID"];
  if($_SESSION["UserType_ID"]=='2'){
      $stmt = $pdo->prepare("SELECT * FROM order_head LEFT JOIN order_ems ON order_head.Order_ID = order_ems.Order_ID LEFT JOIN order_pic ON order_head.Order_ID = order_pic.Order_ID where order_head.Order_status='2' OR order_head.Order_status='1'  order by order_head.Order_ID ");
  }
  else{
    $stmt = $pdo->prepare("SELECT * FROM order_head LEFT JOIN order_ems ON order_head.Order_ID = order_ems.Order_ID  WHERE order_head.User_ID=$User_ID");
    /*
    $stmt = $pdo->prepare("SELECT * from order_head where User_ID=$User_ID ORDER BY Order_ID");
    */
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
    <?php
        if($_SESSION["UserType_ID"]=='1') {  //ถ้าเป็น user
    ?>
          <td><?=$row["Ems_code"]?></td>
        <td>
          <?php
            $null ='1';
           if($row["Order_status"]==1){?>
          <form action="order_confirm_upload.php" method="post">
            <input type="hidden" name="Order_ID" id="Order_ID" value="<?=$row["Order_ID"]?>">
            <input type="submit" value="แจ้ง" class='btn btn-warning btn-xs' />
          </form>
          <?php }?>
        </td>
        <?php }
          else {
            ?>
              <td>
                <?php
                  if($row['Shipping_ID']=='2'){
                  echo "EMS";}
                  else {
                    echo "แบบลงทะเบียน";
                  }
                ?>
              </td>
              <td>
              <a href="pic_order/<?=$row['Order_pic']?>" download>
                <img id="myImg" alt="ไม่มีรูป"  src="pic_order/<?=$row['Order_pic']?>" width="200" height="100">
              </a>
              </td>
      <?php }  ?>
    <td><a class="btn btn-primary" href="order_detail_list.php?Order_ID=<?=$row["Order_ID"]?>">คลิก</a></td>
    <?php
         if($_SESSION["UserType_ID"]=='2') {  //ถ้าเป็น admin มีเมนูแก้ไข status
    ?>
    <td>
      <form action="edit_status_order.php" method="post">
        <input type="hidden" name="Order_ID" id="Order_ID" value="<?=$row["Order_ID"]?>">
        <input type="submit" value="แก้ไข" class='btn btn-info btn-xs' />
      </form>
    </td>
    <?php } ?>
    <?php
    if($row["Order_status"]==1) {  //ถ้าจ่ายตังแล้วไม่สามารถยกเลิกได้
    ?>
    <td>
      <input type="submit" value="ยกเลิก" class="btn btn-danger" onclick='confirmDelete(<?=$row["Order_ID"]?>);' />
    </td>
<?php }
    else {  ?>
    <td>
    </td>
  <?php }
  }
?>
</table>
<a href="../index.php" class='btn btn-success btn-xs font2'>กลับหน้ารายการสินค้า</a>

</div>
<!-- ************************************* -->


</body>

</html>
