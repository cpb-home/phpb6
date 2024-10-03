<?php

if (isset($_GET['text'])) {
    $text = htmlspecialchars($_GET['text']);
}

header('Content-Type: text/plain');
header('Content-Disposition: attachment; filename=file.txt');
echo $text;