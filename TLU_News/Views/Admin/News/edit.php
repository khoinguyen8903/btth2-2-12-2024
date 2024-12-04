<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa Tin</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: Arial, sans-serif; background-color: #f4f7fa; color: #333; }
        .container { max-width: 800px; margin: 0 auto; padding: 20px; }
        header h1 { font-size: 24px; color: #444; margin-bottom: 20px; }
        .form { background-color: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); }
        .input-text, .input-textarea { width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px; }
        .input-textarea { height: 150px; }
        button { padding: 10px 20px; background-color: #007bff; color: white; border: none; border-radius: 4px; width: 100%; cursor: pointer; }
        button:hover { background-color: #0056b3; }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Sửa Tin</h1>
        </header>

        <form action="index.php?controller=news&action=edit&id=<?= $news['id'] ?>" method="POST" class="form">
            <label for="title">Tiêu đề:</label>
            <input type="text" id="title" name="title" value="<?= htmlspecialchars($news['title']) ?>" required class="input-text">

            <label for="content">Nội dung:</label>
            <textarea id="content" name="content" required class="input-textarea"><?= htmlspecialchars($news['content']) ?></textarea>

            <label for="image">Hình ảnh:</label>
            <input type="text" id="image" name="image" value="<?= htmlspecialchars($news['image']) ?>" required class="input-text">

            <label for="category_id">Danh mục:</label>
            <input type="number" id="category_id" name="category_id" value="<?= htmlspecialchars($news['category_id']) ?>" required class="input-text">

            <button type="submit">Cập nhật</button>
        </form>
    </div>
</body>
</html>
