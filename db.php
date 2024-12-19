<?php
$host = 'localhost';
$dbname = 'bookmark_app';
$user = 'root'; // XAMPPやMAMPのデフォルトユーザー名
$pass = ''; // パスワード（通常は空）

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("データベース接続失敗: " . $e->getMessage());
}
?>
