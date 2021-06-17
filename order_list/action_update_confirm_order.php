<?php include "../connect.php"?>
<?php
    $Order_ID = $_POST['Order_ID'];
    $stmt2 = $pdo->prepare("UPDATE order_head SET Order_status='2' WHERE Order_ID= '$Order_ID' ");
		$stmt2->execute();
    $stmt = $pdo->prepare("UPDATE order_pic SET Order_pic=?,Order_con_date=? WHERE Order_ID = ?");
    /* รับรูป */
    $path = pathinfo(basename($_FILES['Order_pic']['name']),PATHINFO_EXTENSION);

      if ($path=="png" or $path=="jpg" or $path=="jpeg"){
      $new_pic_name = 'order_'.uniqid().".".$path;
      $pic_folder_path = "pic_order/";
      $upload_path = $pic_folder_path.$new_pic_name ;
      //uploading
      $success = move_uploaded_file($_FILES['Order_pic']['tmp_name'],$upload_path);
      if($success==FALSE){
        echo "upload is FALSE";
        exit();
      }
    }else{
      echo "please upload photo again";
      exit();
    }

    $_POST["Order_pic"] = $new_pic_name;

    $stmt->bindParam(1, $_POST["Order_pic"]);
    $stmt->bindParam(2, $_POST["Confirm_date"]);
    $stmt->bindParam(3, $_POST['Order_ID']);
    if($stmt->execute())
    header("location: order_head_list.php");
?>
