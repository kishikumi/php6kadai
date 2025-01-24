<?php
session_start();
require_once('funcs.php');
loginCheck();

//1. POSTデータ取得
$sleep = $_POST['sleep'];
$mood = $_POST['mood'];
$text = $_POST['text'];

$user_id = $_SESSION['user_id'];

//2. DB接続します
$pdo = db_conn();

try {
    //３．データ登録SQL作成
    $stmt = $pdo->prepare('INSERT INTO php4_table (user_id,sleep, mood, text, date) VALUES (:user_id,:sleep, :mood, :text, SYSDATE())');
    $stmt->bindValue(':sleep', $sleep, PDO::PARAM_INT);
    $stmt->bindValue(':mood', $mood, PDO::PARAM_INT);
    $stmt->bindValue(':text', $text, PDO::PARAM_STR);
    $stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
    $status = $stmt->execute(); // 実行

     echo "セルフケア記録が保存されました。";

    // ポイント加算用の別ファイルを呼び出す
    header("Location: points.php?user_id=" . urlencode($user_id));
    exit;
} catch (Exception $e) {
    echo "エラー: " . $e->getMessage();
}
