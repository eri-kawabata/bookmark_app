<?php
$host = 'mysql3104.db.sakura.ne.jp';  // DBホスト（さくらサーバー指定）
$dbname = 'gs-erik_bookmarkapp';      // データベース名
$user = 'gs-erik_bookmarkapp';        // サクラサーバーユーザー名
$pass = 'gintoki555';                 // パスワード

try {
    // PDO接続設定
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "データベース接続成功！"; // デバッグ用メッセージ
} catch (PDOException $e) {
    // エラー処理
    die("データベース接続失敗: " . $e->getMessage());
}
?>
