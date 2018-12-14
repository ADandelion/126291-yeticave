<?php
require_once 'functions.php';
require_once 'data.php';
require_once 'data_time.php';
require_once 'init.php';

if(!$link) {
    $error = mysqli_connect_error();
    $error_content = include_template('error.php', ['error' => $error]);
    print($error_content);
}
else {
    $sql_get_categories = 'SELECT `id`, `name` FROM categories';
    $result = mysqli_query($link, $sql_get_categories);

    if($result) {
        $categories = mysqli_fetch_all($result, MYSQLI_ASSOC);

    }
    else {
        $error = mysqli_connect_error();
        $error_content = include_template('error.php', ['error' => $error]);
    }
}

// Лоты

$sql_get_lots = 'SELECT  lots.date_create, lots.name, lots.starting_price, lots.image, max(bets.price) AS price, categories.name AS cat_name
                FROM lots
                JOIN categories on lots.category_id = categories.id
                LEFT JOIN bets on lots.id = bets.lot_id
                WHERE lots.winner_id IS NULL
                AND lots.date_expire > NOW()
                GROUP BY lots.id
                ORDER BY bets.add_date desc,
                         lots.date_create desc';

if($res = mysqli_query($link, $sql_get_lots)) {
    $lots = mysqli_fetch_all($res, MYSQLI_ASSOC);
    $main_content = include_template('index.php', ['categories' => $categories, 'lots' => $lots]);
}
var_dump($lots[2]['date_create']);

$layout_content = include_template('layout.php', [
    'user_auth' => $is_auth,
    'title' => $title,
    'user_name' => $user_name,
    'user_avatar' => $user_avatar,
    'main_content' => $main_content,
    'categories' => $categories

]);

print($layout_content);
