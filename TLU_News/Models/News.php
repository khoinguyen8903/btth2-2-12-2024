<?php
require_once __DIR__ . '/db.php';

class News {
    public static function getAll() {
        global $conn;
        $stmt = $conn->query("SELECT * FROM news");
        $newsList = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        if ($newsList) {
            return $newsList;
        } else {
            echo "Không có dữ liệu tin tức.";
            return [];
        }
    }

    public static function getById($id) {
        global $conn;
        $stmt = $conn->prepare("SELECT * FROM news WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function create($title, $content, $image, $category_id) {
        global $conn;

        // Kiểm tra xem dữ liệu có hợp lệ không
        if (empty($title) || empty($content) || empty($image) || empty($category_id)) {
            throw new Exception('Tất cả các trường phải được điền đầy đủ.');
        }

        try {
            $stmt = $conn->prepare("INSERT INTO news (title, content, image, category_id) VALUES (?, ?, ?, ?)");
            $stmt->execute([$title, $content, $image, $category_id]);
            
            // Kiểm tra số bản ghi đã được thêm vào
            if ($stmt->rowCount() > 0) {
                return true; // Trả về true nếu việc thêm thành công
            } else {
                throw new Exception('Không có bản ghi nào được thêm vào.');
            }
        } catch (PDOException $e) {
            // Ghi lại lỗi và hiển thị chi tiết
            error_log('Lỗi khi thêm tin tức: ' . $e->getMessage());
            throw new Exception('Lỗi khi thêm tin tức: ' . $e->getMessage());
        }
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
}
?>
