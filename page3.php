<?php
session_start();

$_SESSION['page3'] = isset($_SESSION['page3']) ? ++$_SESSION['page3'] : 1;

if ($_SESSION['page3'] % 3 === 0) {
    header('Location: ./page4.php');
}

require_once('./header.php');

echo '<h1>Вот вы и открыли страницу 3 вот такой раз: ' . $_SESSION['page3'] . '</h1>';