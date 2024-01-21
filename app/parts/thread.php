<?php
include_once("./app/database/connect.php");
include("app/functions/comment_add.php");
include("app/functions/comment_get.php");
include("app/functions/thread_get.php");
?>

<?php foreach ($thread_array as $thread): ?>
<div class="threadWrapper">
	<div class="childWrapper">
		<div class="thredTitle">
			<span>【タイトル】</span>
			<h1><?php echo $thread["title"] ?></h1>
		</div>

		<?php include("app/parts/commentSection.php") ?>
		<?php include("app/parts/commentForm.php") ?>

	</div>
</div>
<?php endforeach ?>