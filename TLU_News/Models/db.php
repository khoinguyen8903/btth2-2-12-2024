<?php
$host = 'localhost'; // Địa chỉ máy chủ cơ sở dữ liệu
$dbname = 'tintuc'; // Tên cơ sở dữ liệu
$username = 'root'; // Tên người dùng
$password = ''; // Mật khẩu

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Cài đặt chế độ lỗi để ném ngoại lệ
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Kết nối thành công!";
} catch (PDOException $e) {
    echo "Kết nối cơ sở dữ liệu thất bại: " . $e->getMessage();
}
?>
