<?php

$title = "y045u";
// var_dump($title);
// print_r($title);
// if ($_POST[username] != "") {
// 	$username = $_POST[username];
// } 
// var_dump($username);

?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>２ちゃんねる掲示板</title>
	<link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
	<header>
		<h1 class="title">２ちゃんねる掲示板</h1>
		<hr>
	</header>

	<div class="threadWrapper">
		<div class="childWrapper">
			<div class="thredTitle">
				<span>【タイトル】</span>
				<h1>２ちゃんねる掲示板を作ってみた</h1>
			</div>
			<section>
				<article>
					<div class="wrapper">
						<div class="nameArea">
							<span>名前：</span>
							<p class="username">名無し</p>
							<time>：2024/01/13 5:46</time>
						</div>
						<p class="comment">コメントはこちらです。</p>
					</div>
				</article>
			</section>
			<form class="formWrapper" method="POST">
				<div>
					<input type="submit" value="書き込む">
					<label for="">名前：</label>
					<input type="text" name="username" >
				</div>
				<div>
					<textarea class="commentTextArea"></textarea>
				</div>
			</form>
		</div>
	</div>

</body>
</html>