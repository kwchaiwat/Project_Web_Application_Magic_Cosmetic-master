<?php include "connect.php" ?>
<?php session_start(); ?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Magic Cosmetic!</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap-4.1.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
    <link href="css/btn.css" rel="stylesheet">
    <link href="css/font.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kanit|Mitr|Prompt|Sriracha" rel="stylesheet">

<style type="text/css">

  body, html {
    height: 100%;
}

.bg {
    /* The image used */
    background-image: url("photo/pro1.png");

    /* Full height */
    height: 100%;

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

.pad{
  position: fixed;
  padding-top: 35em;
  padding-left: 59em;
}



</style>
  </head>
  <body class="bg">
<p class="font1"  style="font-size: 160px;padding-top: 30px;
  padding-left: 600px;color: White; text-align: center;text-shadow: black 1px 1px 0.2em;position: fixed;">Magic Cosmetic</p>

   <div  class="pad">
<table border="0">

  <tr>
    <td >

             <a class="nav-link" href="<?php
          if(!empty($_SESSION["Username"])){
            echo'#';
          }
          elseif(empty($_SESSION["Username"])){
            echo'Authentication\login.php';
          }
          ?>"> <button type="button" class="btn btn-lg btn-block font2 " style="background-color: #ff5454;"   >
             <?php
      if(!empty($_SESSION["Username"])){
      echo $_SESSION["Username"];
      ?>
        <?php
         if($_SESSION["UserType_ID"]==2) {
          header("location: menu_admin.php");
          exit;
            }
          header("location: menu_user.php");
                    }
                    if(empty($_SESSION["Username"])){
                    echo 'เข้าสู่ระบบ';
                  }
                  ?>
                  </button></a>
   </td>
   <td >

     <a class="nav-link" href="Authentication/register_form.php"><button class="btn btn-lg btn-block font2" style="background-color: #ff5454" type="button">สมัครสมาชิก</button></a>
   </td>
</tr>
  </table>
</div>


<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../../../assets/js/vendor/holder.min.js"></script>
  </body>
</html>
