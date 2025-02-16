php<?php
session_start();

// ѕровер€ем, существует ли сесси€ дл€ посещенных страниц
if (!isset($_SESSION['visited_pages'])) {
    $_SESSION['visited_pages'] = [];
}

// ѕолучаем им€ текущей страницы
$current_page = basename($_SERVER['PHP_SELF']);

// ƒобавл€ем текущую страницу в список посещенных страниц, если она там еще нет
if (!in_array($current_page, $_SESSION['visited_pages'])) {
    $_SESSION['visited_pages'][] = $current_page;
}

// ќтображаем список посещенных страниц
echo "<h2>ѕосещенные страницы:</h2>";
echo "<ul>";
foreach ($_SESSION['visited_pages'] as $page) {
    echo "<li>$page</li>";
}
echo "</ul>";
?>
