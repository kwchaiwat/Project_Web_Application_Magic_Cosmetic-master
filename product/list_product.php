<?php include('../header2.php');?>
<?php include "../connect.php" ?>
<?php session_start(); ?>
<html>
<head>
<meta charset="utf-8">

                        <script>
                        function confirmDelete(Product_ID) {
                        var ans = confirm("Do you want to delete the item? " + Product_ID);
                        if (ans==true)
                        document.location = "action_deleteproduct.php?Product_ID=" + Product_ID;
                        }
                        </script>

                         <style>
                        .custab{
                            border: 1px solid #ccc;
                            padding: 5px;
                            margin: 5% 0;
                            box-shadow: 3px 3px 2px #ccc;
                            transition: 0.5s;
                            }
                        .custab:hover{
                            box-shadow: 3px 3px 0px transparent;
                            transition: 0.5s;
                            }
                    </style>
                        </head>
    <body >

          <?php if($_SESSION["UserType_ID"]=='2') { ?>
<!-- ********************************************************************************************** -->

       <div class="container" style="margin-top:2400px;" >

                        <form style="text-align: right; margin-right: 4em; " method="post" action="form_add_product.php" >
                                        <input type="submit" class="btn btn-success font2"  value="เพิ่มสินค้า">
                              </form>

                        <table width="1000"  height="200"  border="0" align="center" class="table-striped jumbotron font2 ">

                             <tr style="font-size: 20px;" >
                                <th>รหัสสินค้า</th>
                                <th>ชื่อสินค้า</th>
                                <th>ชนิดสินค้า</th>
                                <th>รายยละเอียดสินค้า</th>
                                <th>ราคาสินค้า</th>
                                <th>รูปสินค้า</th>
                                <th colspan="2">การแก้ไข</th>
                            </tr>
<!-- ********************************************************************************************** -->
                                        <?php
                                        $stmt = $pdo->prepare("SELECT product.Product_ID , product.Product_name, product_type.ProType_name ,product.Product_detail, product.Product_price, product.Product_pic FROM product JOIN product_type ON product.ProType_ID = product_type.ProType_ID ORDER BY Product_ID ");

                                        $stmt->execute();

                                        while ($row = $stmt->fetch()) {

                                        ?>
<!-- ********************************************************************************************** -->

                                <tr>
                                    <td><?=$row["Product_ID"]?></td>
                                    <td><?=$row["Product_name"]?></td>
                                    <td><?=$row["ProType_name"]?></td>
                                    <td><?=$row["Product_detail"]?></td>
                                    <td><?=$row["Product_price"]?></td>
                                    <td><img src='pic_product/<?=$row["Product_pic"]?>' width='200'></td>
                                    <td >

                                      <form method="post" action="form_update_product.php" >
                                        <input type="hidden" value="<?=$row["Product_ID"]?>" name="Product_ID">
                                        <input type="submit" class="btn btn-warning" value="แก้ไข">
                                      </form>
                                      </td>
                                      <td>
                                            <a href="#" class="btn btn-danger" onclick='confirmDelete(<?=$row["Product_ID"]?>);' >
                                             ลบ</a>
                                     </td>
                                </tr>
                                <?php
                                }
                                ?>

<!-- ********************************************************************************************** -->
<?php
}
else {
  echo "กรุณาเข้าสู่ผู้ดูแลระบบ";
  	//header("location: login.html");
}
?>
<!-- ********************************************************************************************** -->

    </table>
</div>
</body>
</html>
