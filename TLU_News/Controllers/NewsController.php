<?php
require_once "Models/News.php";

class NewsController {
    public function index() {
        $newsList = News::getAll();
        require_once "Views/Admin/News/index.php";
    }

    public function add() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'] ?? '';
            $content = $_POST['content'] ?? '';
            $image = $_POST['image'] ?? '';
            $category_id = $_POST['category_id'] ?? '';

            News::create($title, $content, $image, $category_id);
            header("Location: index.php?controller=news&action=index");
            exit;
        }
        require_once "Views/Admin/News/add.php";
    }

    public function edit() {
        $id = $_GET['id'] ?? null;
        if (!$id) die("ID không hợp lệ.");

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'] ?? '';
            $content = $_POST['content'] ?? '';
            $image = $_POST['image'] ?? '';
            $category_id = $_POST['category_id'] ?? '';

            News::update($id, $title, $content, $image, $category_id);
            header("Location: index.php?controller=news&action=index");
            exit;
        }

        $news = News::getById($id);
        require_once "Views/Admin/News/edit.php";
    }

    public function delete() {
        $id = $_GET['id'] ?? null;
        if ($id) {
            News::delete($id);
        }
        header("Location: index.php?controller=news&action=index");
        exit;
    }
}
?>
