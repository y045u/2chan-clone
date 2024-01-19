<?php

$user = "root";
$pass = "rootpas";

// DB接続
try {
	$pdo = new PDO('mysql:host=localhost;dbname=2chan-clone', $user, $pass);
	// echo "DB接続成功";
} catch (PDOException $error) {
	echo $error->getMessage();
} 


?>