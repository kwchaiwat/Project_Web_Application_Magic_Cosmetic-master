
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
    <link href="../css/font.css" rel="stylesheet">

    <title>Magic Cosmetic!</title>
  </head>
 

<body class="text-center" style="background:linear-gradient(#ecbab2 , #cfa299,#c27872)">
  
  

    <form class="form-signin" method="post" action="check_login.php" role="login">
      <img class="mb-4" src="../photo/logo.png" alt="" width="100" height="100"  border="1">
      <h1 class="h3 mb-3 font-weight-normal" ><p class="font2">กรุณาเข้าสู่ระบบ</p></h1>
      <label for="inputEmail" class="sr-only">user</label>
      <input type="text" name="Username" id="Username" class="form-control font2" placeholder="ชื่อผู้ใช้" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="Password"  id="Password" class="form-control font2" placeholder="รหัสผ่าน" required>
      <div class="checkbox mb-3">
        <!-- <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>-->
      </div>
      <button class="btn btn-lg btn-block font2" style="background-color: #ff5454" type="submit">เข้าสู่ระบบ</button><br>
      <a href="register_form.php"><button class="btn btn-lg btn-block font2" style="background-color: #ff5454" type="button">สมัครสมาชิก</button></a>
      <!--<p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>-->
    </form>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  </body>
</html>



<!--


<!DOCTYPE html>
  <head>
    <meta charset="UTF-8">
    <title>Login</title>
  </head>
<body>
		  		<h1>เข้าสู่ระบบ | Login</h1>
			        <form method="post" action="check_login.php" role="login">

				         <input type="text" name="Username" id="Username" placeholder="Username"  required />
				         <input type="password" name="Password"  id="Password" placeholder="Password" required />
                 <br>
                 <br>
                 <button type="submit">Sign in</button>
                 <br>
                 <br>
                 <a href="register_form.php">Sign-up</a>
			        </form>

	</body>
</html>
-->