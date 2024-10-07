<?php
session_start();

require_once('./header.php');

if (isset($_SESSION['page3'])) {
    echo '<h1>Это страница 4. <br>Страница 3 была открыта следующее число раз: ' . $_SESSION['page3'] . '</h1>';
} else {
    echo '<h1><h1>Это страница 4. <br>Страница 3 ещё не открывалась</h1><br><br>';
}
