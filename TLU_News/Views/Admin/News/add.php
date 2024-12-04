<?php
require_once __DIR__ . '/../../../models/News.php';
?>
<form action="index.php?controller=news&action=add" method="POST">
    <div class="mb-3">
        <label for="title" class="form-label">Tiêu Đề</label>
        <input type="text" class="form-control" name="title" required>
    </div>
    <div class="mb-3">
        <label for="content" class="form-label">Nội Dung</label>
        <textarea class="form-control" name="content" required></textarea>
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Hình Ảnh</label>
        <input type="text" class="form-control" name="image" required>
    </div>
    <div class="mb-3">
        <label for="category_id" class="form-label">Danh Mục</label>
        <input type="number" class="form-control" name="category_id" required>
    </div>
    <button type="submit" class="btn btn-primary">Thêm Tin</button>
</form>
