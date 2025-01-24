<?php
session_start();
require_once('funcs.php');

// ユーザーIDをGETリクエストから取得
if (!isset($_GET['user_id']) || empty($_GET['user_id'])) {
    die("ユーザーIDが指定されていません。");
}
$user_id = intval($_GET['user_id']);

// データベース接続
$pdo = db_conn();

try {
    // ポイント加算クエリ
    $stmt = $pdo->prepare("
        INSERT INTO user_points (user_id, total_points)
        VALUES (:user_id, 1)
        ON DUPLICATE KEY UPDATE total_points = total_points + 1
    ");
    $stmt->execute([':user_id' => $user_id]);

    echo "ポイントが加算されました。<br>";

      // 合計ポイントを取得するクエリ
      $stmt = $pdo->prepare("SELECT total_points FROM user_points WHERE user_id = :user_id");
      $stmt->execute([':user_id' => $user_id]);

      // 結果を取得
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($result) {
        echo "ユーザーID: {$user_id} の合計ポイントは {$result['total_points']} 点です。";
    } else {
        echo "ポイント情報を取得できませんでした。";
    }
} catch (PDOException $e) {
    echo "SQLエラー: " . $e->getMessage();
}