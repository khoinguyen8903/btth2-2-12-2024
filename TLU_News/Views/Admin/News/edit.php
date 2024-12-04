<h1>Sửa tin tức</h1>
<form action="index.php?controller=news&action=edit&id=<?= $news['id'] ?>" method="POST">
    <label>Tiêu đề</label><br>
    <input type="text" name="title" value="<?= $news['title'] ?>" required><br>

    <label>Nội dung</label><br>
    <textarea name="content" required><?= $news['content'] ?></textarea><br>

    <label>Hình ảnh</label><br>
    <input type="text" name="image" value="<?= $news['image'] ?>" required><br>

    <label>Danh mục</label><br>
    <input type="number" name="category_id" value="<?= $news['category_id'] ?>" required><br>

    <button type="submit">Cập nhật</button>
</form>
