<?php
//1. POSTデータ取得
$sleep = $_POST['sleep'];
$mood  = $_POST['mood'];
$text = $_POST['text'];
$id     = $_POST['id'];


//2. DB接続します
require_once('funcs.php');
$pdo = db_conn();

//３．データ登録SQL作成
$stmt = $pdo->prepare('UPDATE php4_table SET sleep=:sleep,mood=:mood,text=:text WHERE id=:id;');
$stmt->bindValue(':sleep', $sleep, PDO::PARAM_INT);
$stmt->bindValue(':mood', $mood, PDO::PARAM_INT);
$stmt->bindValue(':text', $text, PDO::PARAM_STR);
$stmt->bindValue(':id',     $id,     PDO::PARAM_INT);
$status = $stmt->execute(); // 実行


//４．データ登録処理後
if ($status === false) {
    sql_error($stmt);
} else {
    redirect('select.php');
}

