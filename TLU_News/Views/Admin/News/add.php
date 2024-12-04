<h1>Thêm tin mới</h1>
<form action="index.php?controller=news&action=add" method="POST">
    <label>Tiêu đề</label><br>
    <input type="text" name="title" required><br>

    <label>Nội dung</label><br>
    <textarea name="content" required></textarea><br>

    <label>Hình ảnh</label><br>
    <input type="text" name="image" required><br>

    <label>Danh mục</label><br>
    <input type="number" name="category_id" required><br>

    <button type="submit">Thêm</button>
</form>
