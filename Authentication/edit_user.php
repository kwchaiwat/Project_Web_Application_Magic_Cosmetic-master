<?php include('../header1.php');?> 
<?php include "../connect.php"?>
<?php session_start(); ?>
<?php

$stmt = $pdo->prepare("SELECT * FROM user WHERE User_ID = ?");
$stmt->bindParam(1, $_SESSION["User_ID"]);
$stmt->execute();
$row = $stmt->fetch();
?>

<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <script>
    var xmlHttp;
    function checkUsername() {
    //document.getElementById("username").className = "thinking";
    xmlHttp = new XMLHttpRequest();
    xmlHttp.onreadystatechange = showUsernameStatus;
    var username = document.getElementById("Username").value;
    var url = "checkName.php?Username=" + Username;
    xmlHttp.open("GET", url);
    xmlHttp.send();
    }

    function showUsernameStatus() {
      if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
        if (xmlHttp.responseText == "okay") {
          document.getElementById('message1').style.color = 'green';
            document.getElementById('message1').innerHTML = 'Can use this username';
        }
        else {
          document.getElementById("Username").focus();
          document.getElementById("Username").select();
          document.getElementById('message1').style.color = 'red';
            document.getElementById('message1').innerHTML = 'This username is already taken';
        }
      }
    }


    var check = function() {
     if (document.getElementById('Password').value == document.getElementById('conpassword').value) {
         document.getElementById('message').style.color = 'green';
         document.getElementById('message').innerHTML = 'matching';
       } else {
         document.getElementById('message').style.color = 'red';
         document.getElementById('message').innerHTML = 'not matching';
       }
    }
  </script>
</head>
<body>

<div class="container">

  <h2 class="font2" style="text-align: center;">แก้ไขข้อมูลส่วนตัว</h2>
  <form method="post" action="update_user.php" class="font2">
       
          <input  type="hidden" id="User_ID" name="User_ID"  value="<?=$row["User_ID"]?>">
          <input type="hidden" id="Username" name="Username" value="<?=$row["Username"]?>">
          <label for="inputUsername" class="btn btn-lg font1" style="background-color: #ff5454;color: #ffffff; font-size: 36px;"><?=$row["Username"]?></label>
<div class="row">
           <div class="col-md-6 mb-3">
          <label for="inputUser_fname">ชื่อ</label>
          <input type="text" id="User_fname" class="form-control"  value="<?=$row["User_fname"]?>" placeholder="First name" name="User_fname" required title="กรุณากรอกชื่อ" >
          </div>
 <div class="col-md-6 mb-3">
          <label for="inputUser_lname">นามสกุล</label>
          <input type="text" id="User_lname" class="form-control" value="<?=$row["User_lname"]?>" placeholder="Last name"	name="User_lname" required title="กรุณากรอกนามสกุล">
          </div>
</div>

          <label for="inputUser_Add">ที่อยู่</label>
          <textarea type="text" id="User_add" class="form-control" placeholder="Address"	name="User_add" required title="กรุณาที่อยู่" ><?=$row["User_add"]?></textarea><br>
      <div class="row">
      <div class="col-md-6 mb-3">
          <label for="inputUser_email">E-mail</label>
          <input type="text" id="User_email" class="form-control" value="<?=$row["User_email"]?>" placeholder="E-mail"	name="User_email" required title="กรุณากรอกอีเมลล์"><br></div>
<div class="col-md-6 mb-3">
          <label for="inputUser_tel">เบอร์โทรศัพท์</label>
          <input type="text" id="User_tel" class="form-control" value="<?=$row["User_tel"]?>" placeholder="Tel." pattern="[0-9]{10}"	name="User_tel" required title="กรุณากรอกเบอร์โทรศัพท์"><br></div>

      </div>    
          <button type="submit" class="btn btn-lg btn-block font2" style="background-color: #ff5454">ยืนยัน</button>

  </form>

  </div>

  <div class="container">
  <!-- แก้ไข password -->
  <h2 class="font2" style="text-align: center;">แก้ไขรหัสผ่าน</h2>
        <form  method="post" action="edit_password.php" class="font2">
          <input type="hidden" id="User_ID" name="User_ID" value="<?=$row["User_ID"]?>">
          <label for="inputPassword4">รหัสผ่าน</label><br>
          <input type="password"  id="Password" placeholder="Password" name="Password" class="form-control" pattern="[a-zA-z0-9]{5,}" required required title="ตัวอักขระภาษาอังกฤษหรือตัวเลข 5ตัวขึ้นไป"><br>
          <label for="inputPassword4">ยืนยันรหัสผ่าน</label><br>
          <input type="password"  id="conpassword" placeholder="Confirm Password" name="conpassword" class="form-control" required onkeyup='check();'>
          <span id='message' class="font1" style="font-size: 24px;"></span><br>
          <button type="submit" class="btn btn-lg btn-block font2" style="background-color: #ff5454">ยืนยันการแก้ไขรหัสผ่าน</button>
        </form>

        </div>
</body>
</html
