php<?php
session_start();

// ���������, ���������� �� ������ ��� ���������� �������
if (!isset($_SESSION['visited_pages'])) {
    $_SESSION['visited_pages'] = [];
}

// �������� ��� ������� ��������
$current_page = basename($_SERVER['PHP_SELF']);

// ��������� ������� �������� � ������ ���������� �������, ���� ��� ��� ��� ���
if (!in_array($current_page, $_SESSION['visited_pages'])) {
    $_SESSION['visited_pages'][] = $current_page;
}

// ���������� ������ ���������� �������
echo "<h2>���������� ��������:</h2>";
echo "<ul>";
foreach ($_SESSION['visited_pages'] as $page) {
    echo "<li>$page</li>";
}
echo "</ul>";
?>
