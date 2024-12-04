<?php
$controller = $_GET['controller'] ?? 'news';
$action = $_GET['action'] ?? 'index';

require_once "Controllers/NewsController.php";

$newsController = new NewsController();
$newsController->$action();
?>

