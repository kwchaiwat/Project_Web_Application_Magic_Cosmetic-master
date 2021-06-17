<?php

error_reporting( error_reporting() & ~E_NOTICE );
try {
	$pdo = new PDO("mysql:host=localhost;dbname=magiccosmetic;charset=utf8", "root", "");
} catch (PDOException $e) {
	echo "เกิดข้อผิดพลาด : ".$e->getMessage();
}

?>
