<?php include "../connect.php"?>
<?php
$Order_ID = $_POST['Order_ID'];
$stmt = $pdo->prepare("UPDATE order_head SET Order_status='3' WHERE Order_ID=$Order_ID");
if($stmt->execute())
header("location: Order_paid.php");
?>
