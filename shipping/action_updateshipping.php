<?php include "../connect.inc" ?>
<?php
$Shipping_ID = $_POST['Shipping_ID'];
$cost = $_POST['cost'];

$sql	= "UPDATE shipping SET cost = $cost WHERE Shipping_ID = $Shipping_ID";
if($query	= mysqli_query($conn, $sql)){
  header("location: list_shipping.php");
}

?>
