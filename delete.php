<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];

    $stmt = $pdo->prepare("DELETE FROM bookmarks WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    header('Location: index.php');
    exit;
}
?>
