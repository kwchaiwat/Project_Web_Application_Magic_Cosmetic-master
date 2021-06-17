<?php include "../connect.php" ?>
<?php session_start(); ?>
<?php
 if($_SESSION["UserType_ID"]=='2') {
   include('../header2.php');
   $Order_ID = $_POST['Order_ID'];
?>

<html>
<head>
</head>
<body>
<div class="container">
<div class="card form-signin font2">

<form action="action_update_ems.php" method="post">
  <input type="hidden" name="Order_ID" id="Order_ID" value="<?=$_POST['Order_ID']?>">
  <h1>กรุณาใส่รหัส EMS ของ รายการที่ <?php echo $Order_ID; ?></h1><br>
  <input type="text" class="form-control" name="Ems_code">
  <br>
 <button type="submit" class="btn" style="background-color:#ff5454; color: #ffffff" >เพิ่ม</button>
</form>
</div></div>
</body>
</html>

<?php
}
else {
            echo "กรุณาเข้าสู่ผู้ดูแลระบบ";
            //header("location: login.html");
           }
          ?>
