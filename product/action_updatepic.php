<?php include "../connect.php"
 ?>
 <?php session_start(); ?>
<?php

/***** save manage ********/
$User_ID_manage =  $_SESSION['User_ID'];
$Product_ID_manage = $_POST["Product_ID"];
date_default_timezone_set('asia/bangkok');
$Status_date_manage = Date("Y-m-d G:i:s");

					$stmt2 = $pdo->prepare("INSERT INTO manage VALUES (?, ?, ?)");
					$stmt2->bindParam(1, $User_ID_manage);
					$stmt2->bindParam(2, $Product_ID_manage);
					$stmt2->bindParam(3, $Status_date_manage);
					$stmt2->execute();

/***************************************************************************************/

$stmt = $pdo->prepare("UPDATE product SET Product_pic=? WHERE Product_ID=?");
$path = pathinfo(basename($_FILES['Product_pic']['name']),PATHINFO_EXTENSION);
	if ($path=="png" or $path=="jpg" or $path=="jpeg") {
	$new_pic_name = 'pvr_'.uniqid().".".$path;
	$pic_folder_path = "pic_product/";
	$upload_path = $pic_folder_path.$new_pic_name ;
	//uploading
	$success = move_uploaded_file($_FILES['Product_pic']['tmp_name'],$upload_path);
 	if($success==FALSE){
 		echo "upload is FALSE";
 		exit();
 	}
}else{
	echo "please upload photo again";
	exit();
}

$_POST["Product_pic"] = $new_pic_name;


$stmt->bindParam(1, $_POST["Product_pic"]);
$stmt->bindParam(2, $_POST["Product_ID"]);

//include('action_savemanage.php');


if($stmt->execute())
header("location: list_product.php");

?>
