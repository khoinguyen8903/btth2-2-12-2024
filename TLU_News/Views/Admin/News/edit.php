<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Sửa Tin Tức</title>
</head>
<body>
    <div class="container mt-5">
        <h1>Sửa Tin Tức</h1>
        <form action="index.php?controller=news&action=edit&id=<?= $news['id'] ?>" method="POST">
            <div class="mb-3">
                <label for="title" class="form-label">Tiêu Đề</label>
                <input type="text" class="form-control" name="title" value="<?= $news['title'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Nội Dung</label>
                <textarea class="form-control" name="content" required><?= $news['content'] ?></textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Hình Ảnh</label>
                <input type="text" class="form-control" name="image" value="<?= $news['image'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="category_id" class="form-label">Danh Mục</label>
                <input type="number" class="form-control" name="category_id" value="<?= $news['category_id'] ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Cập Nhật Tin</button>
        </form>
    </div>
</body>
</html>
