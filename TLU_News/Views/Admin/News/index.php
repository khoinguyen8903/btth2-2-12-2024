<?php
require_once __DIR__ . '/../../../models/News.php';

// Lấy tất cả tin tức từ cơ sở dữ liệu
$newsList = News::getAll();
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý Tin tức</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: Arial, sans-serif; background-color: #f4f7fa; color: #333; }
        .container { max-width: 1200px; margin: 0 auto; padding: 20px; }
        header { margin-bottom: 20px; }
        header h1 { font-size: 24px; color: #444; }
        .btn { padding: 8px 15px; color: #fff; text-decoration: none; border-radius: 4px; text-align: center; }
        .btn-add { background-color: #28a745; }
        .btn-edit { background-color: #007bff; }
        .btn-delete { background-color: #dc3545; }
        .table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { padding: 12px; border: 1px solid #ddd; text-align: left; }
        th { background-color: #f8f9fa; }
        tr:hover { background-color: #f1f1f1; }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Danh sách Tin tức</h1>
            <a href="index.php?controller=news&action=add" class="btn btn-add">Thêm tin mới</a>
        </header>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tiêu đề</th>
                    <th>Nội dung</th>
                    <th>Hình ảnh</th>
                    <th>Danh mục</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($newsList as $news): ?>
                    <tr>
                        <td><?= $news['id'] ?></td>
                        <td><?= htmlspecialchars($news['title']) ?></td>
                        <td><?= htmlspecialchars($news['content']) ?></td>
                        <td><?= htmlspecialchars($news['image']) ?></td>
                        <td><?= htmlspecialchars($news['category_id']) ?></td>
                        <td>
                            <a href="index.php?controller=news&action=edit&id=<?= $news['id'] ?>" class="btn btn-edit">Sửa</a>
                            <a href="index.php?controller=news&action=delete&id=<?= $news['id'] ?>" class="btn btn-delete" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')">Xóa</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
