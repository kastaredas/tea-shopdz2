<?php
date_default_timezone_set('Asia/Yekaterinburg');
$hour = (int) date('H');
$theme = ($hour >= 8 && $hour < 20) ? 'light' : 'dark';

if (!isset($pageTitle)) {
    $pageTitle = 'Меридиан Чая';
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= htmlspecialchars($pageTitle) ?></title>
<link rel="stylesheet" href="comp/css/style.css">
</head>
<body class="theme-<?= $theme ?>">
<header>
<div class="header-inner">
<a href="index.php" class="logo">☉ Меридиан Чая</a>
<nav>
<a href="tea.php">Чай</a>
<a href="promo.php">Акции</a>
<a href="about.php">О нас</a>
<a href="auth.php">Войти</a>
<a href="cart.php">Корзина</a>
</nav>
</div>
</header>