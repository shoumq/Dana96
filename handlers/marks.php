<?php
require $_SERVER['DOCUMENT_ROOT'] . '/config/config.php';

$select_arr = explode(' ', $_POST['select_mark']);
$select_email = $select_arr[4];

$mysql = new mysqli($adress_db, $user_name_db, $password_db, $db_name_db);

// Сборка данных
$result = $mysql->query("SELECT * FROM users WHERE email = '$select_email'");
$user = $result->fetch_assoc();

$count_mark = $user['count_mark'] + 1;
$mark = $user['mark'] + (int)$_POST['mark_input'];

// Внесение данных
$sql = "UPDATE users SET mark = '$mark', count_mark = '$count_mark' WHERE email = '$select_email'";

if ($mysql->query($sql)) {
    Header('location: /');
} else {
    echo 111;
}
$mysql->close();
