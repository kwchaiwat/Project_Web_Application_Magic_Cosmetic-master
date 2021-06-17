<?php include('../header2.php');?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Add Confirm Order</title>
</head>
<body>
<div class="container" style="margin-top: 3em;margin-bottom:20px; ">
 <h2 class="font2">แจ้งการชำระเงิน</h2>
      <form action="action_update_confirm_order.php" class="card form-signin font2" style="width: 30rem;" method="post" enctype="multipart/form-data">
        <input type="hidden" value="<?=$_POST['Order_ID'];?>" name="Order_ID" id="Order_ID">
        <p style="text-align: left;">เวลา :</p>
      <input type="datetime-local" name="Confirm_date" id="Confirm_date" ><br>
        <p style="text-align: left;">รูป :</p>
      <input class="btn btn-secondary" type="file" name="Order_pic" id="Order_pic" ><br>
      <br>
      <input type="submit" value="ยืนยัน" class="btn btn-lg font2" style="background-color: #ff5454;color: #ffffff; ">
    </form>
</div>
</body>
</html>
