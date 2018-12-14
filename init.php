<?php
require_once 'functions.php';
$db_auth = require_once 'config/db.php';
$link = mysqli_connect($db_auth['host'], $db_auth['user'], $db_auth['password'], $db_auth['database']);
mysqli_set_charset($link, "utf8");