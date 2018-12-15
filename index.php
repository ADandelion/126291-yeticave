<?php
require_once 'db.php';
require_once 'functions.php';
require_once 'data.php';

$main_content = include_template('index.php', ['categories' => $categories, 'lots' => $lots]);

$layout_content = include_template('layout.php', [
    'user_auth' => $is_auth,
    'title' => $title,
    'user_name' => $user_name,
    'user_avatar' => $user_avatar,
    'main_content' => $main_content,
    'categories' => $categories

]);

print($layout_content);
