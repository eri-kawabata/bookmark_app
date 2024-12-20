<?php
$host = 'gs-erik_bookmarkapp';  //データベース名
$dbname = 'mysql3104.db.sakura.ne.jp';  //DBホスト
$user = 'gs-erik_bookmarkapp'; // サクラサーバーユーザー名
$pass = 'gintoki555'; // パスワード
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("データベース接続失敗: " . $e->getMessage());
}
?>
