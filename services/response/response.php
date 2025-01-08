<?php

function redirect(string $page = ''): void {
    header('Location: index.php?page='. $page);
    exit;
}