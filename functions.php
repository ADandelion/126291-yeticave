<?php
/**
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
 * @param $price
 * @return string
 */

function formatPrice($price){
    $rubleStyle = " " . "<b class=\"rub\">р</b>";
    $totalPrice = ceil($price);

    return number_format($totalPrice , 0, '.', ' ') . $rubleStyle;
};

