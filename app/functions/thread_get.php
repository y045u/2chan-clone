<?php
$thread_array = array();

// コメントデータをテーブルから取得してくる。
$sql = "SELECT * FROM thread";
$statement = $pdo->prepare($sql);
$statement->execute();

$thread_array = $statement;

// var_dump($thread_array->fetchAll());
// var_dump($thread_array);

?>