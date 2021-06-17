<?php include "../connect.php" ?>
<?php

$stmt = $pdo->prepare("DELETE FROM user WHERE User_ID=?");
$stmt->bindParam(1, $_GET["User_ID"]);
if ($stmt->execute())
	header("location: list_promotion.php");
?>
