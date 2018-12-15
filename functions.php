<?php
/**
 * Шаблонизатор
 * @param $name
 * @param $data
 * @return false|string
 */
function include_template($name, $data) {
    $name = 'templates/' . $name;
    $result = '';

    if (!file_exists($name)) {
        return $result;
    }

    ob_start();
    extract($data);
    require $name;

    $result = ob_get_clean();

    return $result;
}

/**
 * Форматирует цену
 * @param $price
 * @return string
 */

function format_price($price){
    $rubleStyle = " " . "<b class=\"rub\">р</b>";
    $totalPrice = ceil($price);

    return number_format($totalPrice , 0, '.', ' ') . $rubleStyle;
};

date_default_timezone_set("Europe/Chisinau");

/**
 * Вычисляет время до истечения лота
 * @param $date
 * @return string
 */
function lot_expire ($date) {
    $currentDate = date_create();
    $lotDate = date_create($date);
    $interval= $lotDate->getTimestamp()-$currentDate->getTimestamp();
    $h = floor($interval / 3600);
    $m = floor(($interval - $h * 3600) / 60);
    return "$h:$m";
}