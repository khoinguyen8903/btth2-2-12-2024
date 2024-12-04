<?php
require_once "db.php";

class News {
    public static function getAll() {
        global $conn;
        $stmt = $conn->query("SELECT * FROM news");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function create($title, $content, $image, $category_id) {
        global $conn;
        $stmt = $conn->prepare("INSERT INTO news (title, content, image, category_id) VALUES (?, ?, ?, ?)");
        $stmt->execute([$title, $content, $image, $category_id]);
    }

    public static function update($id, $title, $content, $image, $category_id) {
        global $conn;
        $stmt = $conn->prepare("UPDATE news SET title = ?, content = ?, image = ?, category_id = ? WHERE id = ?");
        $stmt->execute([$title, $content, $image, $category_id, $id]);
    }

    public static function delete($id) {
        global $conn;
        $stmt = $conn->prepare("DELETE FROM news WHERE id = ?");
        $stmt->execute([$id]);
    }

    public static function getById($id) {
        global $conn;
        $stmt = $conn->prepare("SELECT * FROM news WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
