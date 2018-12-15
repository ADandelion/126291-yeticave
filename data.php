<?php
$is_auth = rand(0, 1);
$title = 'Главная страница';
$user_name = 'Aleksandr';
$user_avatar = 'img/user.jpg';

$categories = [];
$sql_get_categories = 'SELECT * FROM categories';
$result = mysqli_query($link, $sql_get_categories);
if($result) {
    $categories = mysqli_fetch_all($result, MYSQLI_ASSOC);
}

$lots = [];
$sql_get_lots = 'SELECT lots.date_expire, lots.name, lots.starting_price, lots.image, IFNULL(max(bets.price), lots.starting_price) AS price, categories.name AS cat_name
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
}
