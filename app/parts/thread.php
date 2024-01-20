<?php
include_once("./app/database/connect.php");
include("app/functions/comment_add.php");
include("app/functions/comment_get.php");
?>

<div class="threadWrapper">
	<div class="childWrapper">
		<div class="thredTitle">
			<span>【タイトル】</span>
			<h1>２ちゃんねる掲示板を作ってみた</h1>
		</div>

		<?php include("app/parts/commentSection.php") ?>
		<?php include("app/parts/commentForm.php") ?>

	</div>
</div>
