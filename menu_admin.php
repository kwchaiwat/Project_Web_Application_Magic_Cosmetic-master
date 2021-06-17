<?php include "connect.php" ?>
<?php session_start(); ?>
<!doctype html>
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

  </head>
  <body style="background:linear-gradient(#c27872,#ecbab2 , #cfa299,#c27872)">

    <header >
      <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #c27872">
        <a class="navbar-brand" href="menu_admin.php">MagicCosmetic</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>



        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">

            <li class="nav-item active">
              <a class="nav-link" href="order_list\order_head_list.php"><span class="font2">รายการสั่งซื้อ</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link " href="Authentication\edit_user.php"><span class="font2">แก้ไข้ข้อมูลส่วนตัว</span></a>
            </li>

             <li class="nav-item active">
              <a class="nav-link " href="Authentication\list_user.php"><span class="font2">รายการสมาชิก</span></a>
            </li>

           <li class="nav-item active">
              <a class="nav-link " href="product\list_product.php"><span class="font2">รายการสินค้า</span></a>
            </li>

           <li class="nav-item active">
              <a class="nav-link " href="shipping\list_shipping.php"><span class="font2">แก้ไขราคาจัดส่ง</span></a>
            </li>
          <li class="nav-item active">
              <a class="nav-link " href="manage\manage_list.php"><span class="font2">ประวัติแก้ไขสินค้า</span></a>
            </li>

          <li class="nav-item active">
              <a class="nav-link " href="manage_order\manage_list_order.php"><span class="font2">ประวัติแก้ไขสถานะรายการสั่งซื้อ</span></a>
            </li>
				   </ul>

          <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" name="keyword" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Search</button>

            <button type="button" class="btn" style="background-color:#ff5454; color: #ffffff"  >  <?php  echo $_SESSION["Username"]; ?></button>
            <a href="Authentication\logout.php"><button type="button" class="btn" style="background-color:#ff5454; color: #ffffff" >ออกจากระบบ</button></a>

        </div>


      </nav>
    </header>


     <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="photo/pro2.png" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-right font1" >
                <h1 style="font-size: 115px;text-shadow: black 1px 1px 0.2em;">Magic Cosmetic</h1>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <img class="second-slide" src="photo/pro2.png" alt="Second slide">

          </div>
          <div class="carousel-item">
            <img class="third-slide" src="photo/pro3.png" alt="Third slide">

          </div>
        </div>
      </div>



      <a href="menu_admin.php"><h1 style="text-align: center;"><span  class="btn btn-lg font2" style="background-color: #ff5454;color: #ffffff; font-size: 36px;">สินค้าทั้งหมด</span></h1></a>


<!-- show product -->
<?php
  include('cart/showproducts.php')
?>
<!-- end show product -->

   </form>
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


<!--
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">ตะกร้าสินค้า</a>
    <a class="dropdown-item" href="order_list\order_head_list.php">รายการสั่งซื้อ</a>
    <a class="dropdown-item" href="Authentication\edit_user.php">แก้ไข้ข้อมูลส่วนตัว</a>
    <a class="dropdown-item" href="Authentication\logout.php">ออกจากระบบ</a>

</div> -->
