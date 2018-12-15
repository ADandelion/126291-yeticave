<?php
$db_auth = [
    'host' => 'localhost',
    'user' => 'root',
    'password' => '',
    'database' => '126291-yeticave'
];

$link = mysqli_connect($db_auth['host'], $db_auth['user'], $db_auth['password'], $db_auth['database']);

if (!$link) {
    die('Не удалось подключиться к базе данных');
}
mysqli_set_charset($link, "utf8");