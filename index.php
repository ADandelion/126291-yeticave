<?php
require_once('functions.php');
require_once('templates/data.php');


$main_content = include_template('index.php', ['categories' => $categories, 'lots' => $lots]);
$layout_content = include_template('layout.php', [
    'user_auth' => $is_auth,
    'title' => $title,
    'user_name' => $user_name,
    'user_avatar' => $user_avatar,
    'categories' => $categories,
    'main' => $main_content
]);

//var_dump($is_auth);
print($layout_content);

