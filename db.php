<?php
$host = 'localhost';  //データベース名
$dbname = 'bookmark_app';  //DBホスト
$user = 'root'; // サクラサーバーユーザー名
$pass = ''; // パスワード
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("データベース接続失敗: " . $e->getMessage());
}
?>
