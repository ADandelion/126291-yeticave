<?php
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


function formatPrice($price){
    $rubleStyle = " " . "<b class=\"rub\">р</b>";
    $totalPrice = ceil($price);
    if ($totalPrice  < 1000) {
        return $totalPrice . $rubleStyle;
    }
    return number_format($totalPrice , 0, '.', ' ') . $rubleStyle;
};

?>
