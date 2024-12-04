<?php
require_once __DIR__ . '/News.php'; // Đảm bảo News class được load
require_once __DIR__ . '/db.php';   // Đảm bảo kết nối cơ sở dữ liệu được load

class NewsController {
    public function index() {
        // Lấy tất cả các tin tức
        $newsList = News::getAll();
        include "views/admin/news/index.php"; // Truyền dữ liệu vào view
    }

    public function add() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Lấy dữ liệu từ form và kiểm tra sự tồn tại của các trường
            $title = isset($_POST['title']) ? $_POST['title'] : '';
            $content = isset($_POST['content']) ? $_POST['content'] : '';
            $image = isset($_POST['image']) ? $_POST['image'] : '';
            $category_id = isset($_POST['category_id']) ? $_POST['category_id'] : '';

            // Kiểm tra xem các trường có bị thiếu không
            if (empty($title) || empty($content) || empty($image) || empty($category_id)) {
                echo "Tất cả các trường phải được điền đầy đủ.";
            } else {
                try {
                    // Gọi hàm model để thêm tin tức vào cơ sở dữ liệu
                    News::create($title, $content, $image, $category_id);
                    // Chuyển hướng về trang danh sách tin tức nếu thêm thành công
                    header('Location: index.php?controller=news&action=index');
                    exit();
                } catch (Exception $e) {
                    // In ra lỗi nếu có
                    echo "Lỗi khi thêm tin tức: " . $e->getMessage();
                }
            }
        }
        include "views/admin/news/add.php";
    }

    public function edit($id) {
        // Lấy tin tức cần chỉnh sửa
        $news = News::getById($id);
        if (!$news) {
            echo "Tin tức không tồn tại.";
            exit();
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Lấy dữ liệu từ form và kiểm tra sự tồn tại của các trường
            $title = isset($_POST['title']) ? $_POST['title'] : '';
            $content = isset($_POST['content']) ? $_POST['content'] : '';
            $image = isset($_POST['image']) ? $_POST['image'] : '';
            $category_id = isset($_POST['category_id']) ? $_POST['category_id'] : '';

            // Gọi model để cập nhật tin tức
            try {
                News::update($id, $title, $content, $image, $category_id);
                // Chuyển hướng sau khi cập nhật thành công
                header('Location: index.php?controller=news&action=index');
                exit();
            } catch (Exception $e) {
                echo "Lỗi khi cập nhật tin tức: " . $e->getMessage();
            }
        }

        include "views/admin/news/edit.php";
    }

    public function delete($id) {
        // Gọi model để xóa tin tức
        try {
            News::delete($id);
            // Chuyển hướng sau khi xóa thành công
            header('Location: index.php?controller=news&action=index');
            exit();
        } catch (Exception $e) {
            echo "Lỗi khi xóa tin tức: " . $e->getMessage();
        }
    }
}
?>
