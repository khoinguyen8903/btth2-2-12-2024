<?php
    require_once __DIR__ . '/../../controllers/AdminController.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Đăng nhập</title>
</head>
<body>
    <div class="container mt-5">
        <h1>Đăng nhập cho Admin</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="mb-3">
                <label for="username" class="form-label">Tên đăng nhập:</label>
                <input type="text" class="form-control" name="username" placeholder="Nhập tên đăng nhập" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mật khẩu:</label>
                <input type="password" class="form-control" name="password" placeholder="Nhập mật khẩu" required>
            </div>
            <button type="submit" class="btn btn-primary" name="dangnhap">Đăng nhập</button>
        </form>
        <?php if (!empty($txt_error)): ?>
            <p class="text-danger mt-3"><?= $txt_error ?></p>
        <?php endif; ?>
    </div>
</body>
</html>