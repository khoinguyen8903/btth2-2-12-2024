<?php
require_once __DIR__ . '/../../../models/News.php';

// Lấy tất cả tin tức từ cơ sở dữ liệu
$newsList = News::getAll();

// Debug kết quả trả về từ cơ sở dữ liệu
var_dump($newsList);  // In ra kiểu dữ liệu và nội dung của $newsList

// Nếu là mảng, bạn có thể dùng print_r để dễ đọc hơn
// print_r($newsList);
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Quản Lý Tin Tức</title>
</head>
<body>
    <div class="container mt-5">
        <h1>Danh Sách Tin Tức</h1>
        <a href="add.php?controller=news&action=add" class="btn btn-success mb-3">Thêm Tin Tức</a>

        <!-- Kiểm tra nếu có tin tức -->
        <?php if (!empty($newsList)): ?>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Tiêu Đề</th>
                        <th>Danh Mục</th>
                        <th>Ngày Tạo</th>
                        <th>Hành Động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($newsList as $news): ?>
                        <tr>
                            <td><?= htmlspecialchars($news['title']) ?></td>
                            <td><?= htmlspecialchars($news['category_id']) ?></td>
                            <td><?= date('d-m-Y', strtotime($news['created_at'])) ?></td>
                            <td>
                                <a href="edit.php?controller=news&action=edit&id=<?= $news['id'] ?>" class="btn btn-primary">Sửa</a>
                                <a href="index.php?controller=news&action=delete&id=<?= $news['id'] ?>" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa tin tức này?')">Xóa</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>Không có tin tức nào.</p>
        <?php endif; ?>
    </div>
</body>
</html>
