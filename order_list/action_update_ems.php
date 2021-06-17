<?php include "../connect.php"?>
<?php
$Order_ID = $_POST['Order_ID'];
$Ems_code = $_POST["Ems_code"];
          $stmt = $pdo->prepare("UPDATE order_head SET Order_status='4' WHERE Order_ID=$Order_ID");
					$stmt->execute();
					$stmt2 = $pdo->prepare("UPDATE order_ems SET Ems_code='$Ems_code' WHERE Order_ID=$Order_ID");
          if($stmt2->execute())
          header("location: Order_paid.php");
?>
