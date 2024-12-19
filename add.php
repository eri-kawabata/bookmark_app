<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $url = $_POST['url'];
    $description = $_POST['description'];

    $stmt = $pdo->prepare("INSERT INTO bookmarks (title, url, description) VALUES (:title, :url, :description)");
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':url', $url);
    $stmt->bindParam(':description', $description);
    $stmt->execute();

    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>ブックマークを追加</title>
    <link rel="stylesheet" href="./style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <!-- テーマ切り替えボタン -->
        <div class="theme-toggle text-end">
            <button id="theme-switcher" class="btn-secondary">テーマ変更</button>
        </div>

        <!-- ヘッダー -->
        <h1>🔗 ブックマークを追加</h1>

        <!-- フォーム -->
        <form method="POST" class="form-card">
            <div class="form-group">
                <label for="title">タイトル:</label>
                <input type="text" id="title" name="title" placeholder="タイトルを入力" required>
            </div>
            <div class="form-group">
                <label for="url">URL:</label>
                <input type="url" id="url" name="url" placeholder="https://example.com" required>
            </div>
            <div class="form-group">
                <label for="description">説明:</label>
                <textarea id="description" name="description" placeholder="説明を入力"></textarea>
            </div>
            <div class="form-actions">
                <button type="submit" class="btn">追加</button>
                <a href="index.php" class="btn-secondary">キャンセル</a>
            </div>
        </form>
    </div>

    <!-- JavaScript -->
    <script src="theme.js"></script>
</body>
</html>


