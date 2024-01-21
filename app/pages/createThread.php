<?php

include_once("../database/connect.php");

?>

<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>新規スレッド作成ページ</title>
	<link rel="stylesheet" href="../../assets/css/style.css">
</head>

<body>
	<?php include("../../app/parts/header.php"); ?>
	<?php include("../../app/parts/validation.php"); ?>

	<div style="padding-left: 36px; color: blue;">
		<h2 style="margin-top: 20px; margin-bottom: 0;">新規スレッド立ち上げ場</h2>
	</div>
	<form action="" method="POST" class="formWrapper">
		<div>
			<label for="title">スレッド名</label>
			<input type="text" name="title">
			<label for="username">名前</label>
			<input type="text" name="username">
		</div>
		<div>
			<textarea name="body" class="commentTextArea"></textarea>
		</div>
		<input type="submit" value="立ち上げ" name="theadSubmitButton">
	</form>
</body>
</html>