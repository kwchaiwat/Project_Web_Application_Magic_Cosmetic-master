<?php
$Username=$_GET["Username"];
//mysql_connect("localhost","root","");
//mysql_select_db("pavara");

$mysqli = new mysqli('localhost', 'root', '', 'magiccosmetic');

//$data=mysqli_query("SELECT Username FROM members where Username='$Username'");
$data = $mysqli->query("SELECT * FROM user where Username='$Username'");

if(mysqli_num_rows($data)>0){
	echo "not";
}
else{
	echo "okay";
	}
?>
