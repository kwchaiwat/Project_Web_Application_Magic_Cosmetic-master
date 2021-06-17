<!doctype html>
<html lang="en">
  <head>
  <?php include('../header.php');?> 
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous"> -->

    <!-- Bootstrap core CSS -->
    <link href="../bootstrap-4.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kanit|Mitr|Prompt|Sriracha" rel="stylesheet">
    <link href="../loginCss.css" rel="stylesheet">
    <link href="../validation.css" rel="stylesheet">
    <link href="../css/font.css" rel="stylesheet">

    <title>Magic Cosmetic!</title>


    <!-- php code -->
      <meta charset="utf-8">
    <title>Sign up</title>
    <!-- java script -->
    <script>
    var xmlHttp;
    function checkUsername() {
    //document.getElementById("Username").className = "thinking";
    xmlHttp = new XMLHttpRequest();
    xmlHttp.onreadystatechange = showUsernameStatus;
    var Username = document.getElementById("Username").value;
    var url = "checkName.php?Username=" + Username;
    xmlHttp.open("GET", url);
    xmlHttp.send();
    }

    function showUsernameStatus() {
      if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
        if (xmlHttp.responseText == "okay") {
          document.getElementById('message1').style.color = 'green';
          document.getElementById('message1').innerHTML = 'Can use this Username';
        }
        else{
          document.getElementById("Username").focus();
          document.getElementById("Username").select();
          document.getElementById('message1').style.color = 'red';
          document.getElementById('message1').innerHTML = 'This Username is already taken';
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
 

<body class="text-center" style="background:linear-gradient(#c27872,#ecbab2 , #cfa299,#c27872)">


<div class="container" style="margin-top: 250px">


      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="photo/logo.png" alt="" width="100" height="100">
        <h2 class="font2">สมัครสมาชิก</h2>

      </div>

      <form method="post" action="save_register.php" >

      <div class="row ">   </div >
        <div class="col-md-8 order-md-1" style="margin-left : 150px">
         <!-- <h4 class="mb-3">Billing address</h4> -->
          <form class="needs-validation" novalidate>


          <div class="mb-3">
              <label for="username" class="font2">ชื่อผู้ใช้</label>
              <div class="input-group">            
                <input type="text" class="form-control" placeholder="Username" name="Username" id="Username" pattern="[a-zA-z0-9]{5,}" required onblur="checkUsername();" title="ตัวอักขระภาษาอังกฤษหรือตัวเลข 5ตัวขึ้นไป"><span id='message1'></span>
                <div class="invalid-feedback" style="width: 100%;">
                  Your username is required.
                </div>
              </div>
            </div>

          <div class="row">
              <div class="col-md-6 mb-3">
                <label for="inputPassword4" class="font2">รหัสผ่าน</label>
                <input type="password" class="form-control" id="Password" placeholder="Password" name="Password" pattern="[a-zA-z0-9]{5,}" required required title="ตัวอักขระภาษาอังกฤษหรือตัวเลข 5ตัวขึ้นไป"><br>
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="inputPassword4" class="font2">ยืนยันรหัสผ่าน</label>
                <input type="password" class="form-control" id="conpassword" placeholder="Confirm Password" name="conpassword" required onkeyup='check();'><br>
            <span id='message'></span>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>    


            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="inputUser_fname" class="font2">ชื่อ</label><br>
            <input type="text" id="User_fname" class="form-control" placeholder="First name" name="User_fname" required title="กรุณากรอกชื่อ"><br>
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="inputUser_lname" class="font2">นามสกุล</label><br>
            <input type="text" class="form-control" id="User_lname" placeholder="Last name"  name="User_lname" required title="กรุณากรอกนามสกุล"><br>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>

            

            

            <div class="mb-3">
              <label for="inputUser_Add" class="font2">ที่อยู่</label><br>
            <textarea type="text" class="form-control" id="User_add" placeholder="Address" name="User_add" required title="กรุณาที่อยู่" ></textarea><br>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="mb-3">
              <label for="inputUser_email" class="font2">E-mail</label><br>
            <input type="email" class="form-control" id="User_email" placeholder="E-mail"  name="User_email" required title="กรุณากรอกอีเมลล์"><br>
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="mb-3">
              <label for="inputUser_tel" class="font2">เบอร์โทรศัพท์</label><br>
            <input type="text" class="form-control" id="User_tel" placeholder="Tel." name="User_tel" required pattern="[0-9]{10}" title="กรุณากรอกเบอร์โทรศัพท์"><br>
            </div>

                      
            
            <hr class="mb-4">
            <button class="btn btn-lg btn-block font2" style="background-color: #ff5454" type="submit">สมัครสมาชิก</button>
          </form><br><br><br><br><br>
        </div>
        </form>
      </div>

   

 <!--
  <h1 style="text-align: center;">สมัครสมาชิก</h1>
   <form method="post" action="save_register.php" style="margin-top: 8%">

            <label for="inputUsername">Username</label><br>
             <input type="text" placeholder="Username" name="Username" id="Username" pattern="[a-zA-z0-9]{5,}" required onblur="checkUsername();" title="ตัวอักขระภาษาอังกฤษหรือตัวเลข 5ตัวขึ้นไป"><span id='message1'></span><br>
            <label for="inputPassword4">Password</label><br>
            <input type="password"  id="Password" placeholder="Password" name="Password" pattern="[a-zA-z0-9]{5,}" required required title="ตัวอักขระภาษาอังกฤษหรือตัวเลข 5ตัวขึ้นไป"><br>
            <label for="inputPassword4">ยืนยันรหัสผ่าน</label><br>
            <input type="password"  id="conpassword" placeholder="Confirm Password" name="conpassword" required onkeyup='check();'><br>
            <span id='message'></span><br>

            <label for="inputUser_fname">ชื่อ</label><br>
            <input type="text" id="User_fname" placeholder="First name" name="User_fname" required title="กรุณากรอกชื่อ"><br>
            <label for="inputUser_lname">นามสกุล</label><br>
            <input type="text" class="form-control" id="User_lname" placeholder="Last name"  name="User_lname" required title="กรุณากรอกนามสกุล"><br>
            <label for="inputUser_Add">ที่อยู่</label><br>
            <textarea type="text" class="form-control" id="User_add" placeholder="Address" name="User_add" required title="กรุณาที่อยู่" ></textarea><br>
            <label for="inputUser_email">E-mail</label><br>
            <input type="email" class="form-control" id="User_email" placeholder="E-mail"  name="User_email" required title="กรุณากรอกอีเมลล์"><br>
            <label for="inputUser_tel">เบอร์โทรศัพท์</label><br>
            <input type="text" class="form-control" id="User_tel" placeholder="Tel." name="User_tel" required title="กรุณากรอกเบอร์โทรศัพท์"><br>
            <button type="submit">ยืนยัน</button>
          </form> 
          -->
 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  </body>
</html>