<?php
date_default_timezone_set("Europe/Chisinau");

$currentTime = date_create(date("Y-m-d H:i"));
$midnightTime = date_create(date("Y-m-d H:i", strtotime("tomorrow")));
$interval = date_diff($midnightTime, $currentTime);
$endDay = $interval->format('%H:%I');

var_dump($currentTime);
