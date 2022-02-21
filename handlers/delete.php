<?php
require $_SERVER['DOCUMENT_ROOT'] . '/config/config.php';

$id = $_POST['idc'];

$mysql = new mysqli($adress_db, $user_name_db, $password_db, $db_name_db);

$sql = "DELETE FROM users WHERE id = '$id'";

if ($mysql->query($sql)) {
    Header('location: /table');
} else {
    echo "Ошибка: " . $conn->error;
}
$mysql->close();
