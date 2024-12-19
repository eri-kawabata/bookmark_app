<?php
require 'db.php';

// データを取得
$stmt = $pdo->query("SELECT * FROM bookmarks ORDER BY created_at DESC");
$bookmarks = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
    <title>ブックマーク一覧</title>
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
        <h1>ブックマーク一覧</h1>

        <!-- 新規追加ボタン -->
        <div class="text-end mb-4">
            <a href="add.php" class="btn">＋ 新しいブックマークを追加</a>
        </div>

        <!-- ブックマークのカード一覧 -->
        <div class="card-container">
            <?php foreach ($bookmarks as $bookmark): ?>
                <div class="card">
                    <div class="card-title">
                        <a href="<?= htmlspecialchars($bookmark['url']) ?>" target="_blank"><?= htmlspecialchars($bookmark['title']) ?></a>
                    </div>
                    <p class="card-text"><?= htmlspecialchars($bookmark['description']) ?></p>
                    <form method="POST" action="delete.php">
                        <input type="hidden" name="id" value="<?= $bookmark['id'] ?>">
                        <button type="submit" class="btn-secondary">削除</button>
                    </form>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="theme.js"></script>
</body>
</html>
