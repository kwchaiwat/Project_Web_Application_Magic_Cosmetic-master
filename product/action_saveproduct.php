<?php include "../connect.php" ?>
<?php session_start(); ?>
<?php
error_reporting(E_ALL);
if($_SESSION["Username"]=='admin') {
					$Product_sold=0;
					$stmt = $pdo->prepare("INSERT INTO product VALUES ('', ?, ?, ?, ?, ?, ?, ?)");
					$stmt->bindParam(1, $_POST["Product_name"]);
					$stmt->bindParam(2, $_POST["ProType_ID"]);
					$stmt->bindParam(3, $_POST["Product_detail"]);
					$stmt->bindParam(4, $_POST["Product_price"]);
					$stmt->bindParam(5, $_POST["Product_stock"]);
					$stmt->bindParam(6, $Product_sold);

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

					$stmt->bindParam(7, $_POST["Product_pic"]);


					if($stmt->execute()){
					header("location: list_product.php");

					}
}
else {
  echo "กรุณาเข้าสู่ผู้ดูแลระบบ";
  	//header("location: login.html");
}

?>
