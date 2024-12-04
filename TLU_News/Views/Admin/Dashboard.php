<?php
    session_start();
    ob_start();

    if (!isset($_SESSION['role']) || $_SESSION['role'] != 1) {
        header('Location: login.php');
        exit();
    }

?>
<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Bảng Điều Khiển Quản Trị</title>
</head>

<body>

    <!-- Header -->
    <header class="bg-primary text-white py-4 text-center">
        <h1>Trang Quản Lý</h1>
    </header>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link" href="../../controllers/adminController.php?logout=true";>Thoát</a>
            </li>
            </ul>
        </div>
        </div>
    </nav>

   