<h1>Danh sách tin tức</h1>
<a href="index.php?controller=news&action=add">Thêm tin mới</a>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Tiêu đề</th>
        <th>Nội dung</th>
        <th>Hình ảnh</th>
        <th>Danh mục</th>
        <th>Hành động</th>
    </tr>
    <?php foreach ($newsList as $news): ?>
        <tr>
            <td><?= $news['id'] ?></td>
            <td><?= $news['title'] ?></td>
            <td><?= $news['content'] ?></td>
            <td><?= $news['image'] ?></td>
            <td><?= $news['category_id'] ?></td>
            <td>
                <a href="index.php?controller=news&action=edit&id=<?= $news['id'] ?>">Sửa</a>
                <a href="index.php?controller=news&action=delete&id=<?= $news['id'] ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')">Xóa</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
