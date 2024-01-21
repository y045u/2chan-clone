<?php
$thread_array = array();

// コメントデータをテーブルから取得してくる。
$sql = "SELECT * FROM thread";
$statement = $pdo->prepare($sql);
$statement->execute();

$thread_array = $statement;

// var_dump($thread_array->fetchAll());
// var_dump($thread_array);

// DB接続を切る
// $pdo = null;
// $statement = null;


?>