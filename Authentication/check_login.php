<?php include "../connect.php";
session_start();

$stmt = $pdo->prepare("SELECT * FROM user WHERE Username = ? ");
$stmt->bindParam(1, $_POST["Username"]);
$stmt->execute();
$row = $stmt->fetch();

$hash = $row["Password"];

        if (password_verify($_POST["Password"], $hash)) {


                  $_SESSION["Username"] = $row["Username"];
                  $_SESSION["Password"] = $row["Password"];
                  $_SESSION["User_ID"] = $row["User_ID"];
                  $_SESSION["User_fname"] = $row["User_fname"];
                  $_SESSION["User_lname"] = $row["User_lname"];
                  $_SESSION["User_add"] = $row["User_add"];
                  $_SESSION["User_email"] = $row["User_email"];
                  $_SESSION["User_tel"] = $row["User_tel"];
                  $_SESSION["UserType_ID"] = $row["UserType_ID"];

                  if($_SESSION["UserType_ID"]=='2'){
                      header("location: ../index.php");
                  }
                  else{
                      header("location: ../index.php");
                  }
          }
      else {
              //header("location: login_fail.php");
              echo "<script type='text/javascript'>alert('Wrong Username or Password');
              window.location='login.php';
              </script>";
            }

?>
