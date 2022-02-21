<?php
require $_SERVER['DOCUMENT_ROOT'] . '/config/config.php';

$name = $_POST['name'];
$surname = $_POST['surname'];
$patronymic = $_POST['patronymic'];
$position = $_POST['position'];
$email = $_POST['email'];
$password = $_POST['password'];

$mysql = new mysqli($adress_db, $user_name_db, $password_db, $db_name_db);

if ($position == "d1") {
    $sql = "INSERT INTO users (name, surname, patronymic, position, email, password, d4, d5, d6, d13) 
    VALUES ('$name', '$surname','$patronymic', '$position', '$email', '$password', '1', '1', '1', '1')";
}

elseif ($position == "d2") {
    $sql = "INSERT INTO users (name, surname, patronymic, position, email, password, d1, d4, d11, d13) 
    VALUES ('$name', '$surname','$patronymic', '$position', '$email', '$password', '1', '1', '1', '1')";
}

elseif ($position == "d3") {
    $sql = "INSERT INTO users (name, surname, patronymic, position, email, password, d1, d2, d3, d4, d5, d6, d7, d8, d9, d10, d11, d12, d13) 
    VALUES ('$name', '$surname','$patronymic', '$position', '$email', '$password', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1')";
}

elseif ($position == "d4") {
    $sql = "INSERT INTO users (name, surname, patronymic, position, email, password, d1, d5, d6) 
    VALUES ('$name', '$surname','$patronymic', '$position', '$email', '$password', '1', '1', '1')";
}

elseif ($position == "d5") {
    $sql = "INSERT INTO users (name, surname, patronymic, position, email, password, d1, d4, d6, d7, d8, d9, d13) 
    VALUES ('$name', '$surname','$patronymic', '$position', '$email', '$password', '1', '1', '1', '1', '1', '1', '1')";
}

elseif ($position == "d6") {
    $sql = "INSERT INTO users (name, surname, patronymic, position, email, password, d1, d4, d5, d9, d13) 
    VALUES ('$name', '$surname','$patronymic', '$position', '$email', '$password', '1', '1', '1', '1', '1')";
}

elseif ($position == "d7") {
    $sql = "INSERT INTO users (name, surname, patronymic, position, email, password, d4, d5, d6, d13) 
    VALUES ('$name', '$surname','$patronymic', '$position', '$email', '$password', '1', '1', '1', '1')";
}

elseif ($position == "d8") {
    $sql = "INSERT INTO users (name, surname, patronymic, position, email, password, d1, d2, d3, d4, d5, d6, d7, d8, d9, d10, d11, d12, d13) 
    VALUES ('$name', '$surname','$patronymic', '$position', '$email', '$password', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1')";
}

elseif ($position == "d9") {
    $sql = "INSERT INTO users (name, surname, patronymic, position, email, password, d1, d4, d5, d6, d7, d13) 
    VALUES ('$name', '$surname','$patronymic', '$position', '$email', '$password', '1', '1', '1', '1', '1', '1')";
}

elseif ($position == "d10") {
    $sql = "INSERT INTO users (name, surname, patronymic, position, email, password, d2, d11, d12, d13) 
    VALUES ('$name', '$surname','$patronymic', '$position', '$email', '$password', '1', '1', '1', '1')";
}

elseif ($position == "d11") {
    $sql = "INSERT INTO users (name, surname, patronymic, position, email, password, d2) 
    VALUES ('$name', '$surname','$patronymic', '$position', '$email', '$password', '1')";
}

elseif ($position == "d12") {
    $sql = "INSERT INTO users (name, surname, patronymic, position, email, password, d1, d2, d4, d5, d7, d10, d11, d13) 
    VALUES ('$name', '$surname','$patronymic', '$position', '$email', '$password', '1', '1', '1', '1', '1', '1', '1', '1')";
}

elseif ($position == "d13") {
    $sql = "INSERT INTO users (name, surname, patronymic, position, email, password, d1, d2, d4, d5, d7, d10, d11) 
    VALUES ('$name', '$surname','$patronymic', '$position', '$email', '$password', '1', '1', '1', '1', '1', '1', '1')";
}

if ($mysql->query($sql)) {
    Header('location: /login');
} else {
    echo "Ошибка: " . $conn->error;
}
$mysql->close();
