<?php
  $Shipping_ID = $_POST['Shipping_ID'];
  $sql2	= "select * from shipping where Shipping_ID=$Shipping_ID";
  $query2	= mysqli_query($conn, $sql2);
  $row2	= mysqli_fetch_array($query2);
  $ems	= $row2['cost'];
  $total_and_ems = $total + $ems;
?>
