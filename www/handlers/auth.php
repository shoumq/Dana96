<?php
require $_SERVER['DOCUMENT_ROOT'] . '/config/config.php';

$email = $_POST['email'];
$password = $_POST['password'];

$mysql = new mysqli($adress_db, $user_name_db, $password_db, $db_name_db);

$result = $mysql->query("SELECT * FROM users WHERE email =
'$email' AND password = '$password'");
$user = $result->fetch_assoc();

if (count($user) == 0) {
  echo "error";
} else {
  setcookie('id', $user['id'], time() + 3600 * 24 * 30, '/');
  setcookie('name', $user['name'], time() + 3600 * 24 * 30, '/');
  setcookie('surname', $user['surname'], time() + 3600 * 24 * 30, '/');
  setcookie('patronymic', $user['patronymic'], time() + 3600 * 24 * 30, '/');
  setcookie('position', $user['position'], time() + 3600 * 24 * 30, '/');
  setcookie('email', $user['email'], time() + 3600 * 24 * 30, '/');
  setcookie('password', $user['password'], time() + 3600 * 24 * 30, '/');

  setcookie('d1', $user['d1'], time() + 3600 * 24 * 30, '/');
  setcookie('d2', $user['d2'], time() + 3600 * 24 * 30, '/');
  setcookie('d3', $user['d3'], time() + 3600 * 24 * 30, '/');
  setcookie('d4', $user['d4'], time() + 3600 * 24 * 30, '/');
  setcookie('d5', $user['d5'], time() + 3600 * 24 * 30, '/');
  setcookie('d6', $user['d6'], time() + 3600 * 24 * 30, '/');
  setcookie('d7', $user['d7'], time() + 3600 * 24 * 30, '/');
  setcookie('d8', $user['d8'], time() + 3600 * 24 * 30, '/');
  setcookie('d9', $user['d9'], time() + 3600 * 24 * 30, '/');
  setcookie('d10', $user['d10'], time() + 3600 * 24 * 30, '/');
  setcookie('d11', $user['d11'], time() + 3600 * 24 * 30, '/');
  setcookie('d12', $user['d12'], time() + 3600 * 24 * 30, '/');
  setcookie('d13', $user['d13'], time() + 3600 * 24 * 30, '/');

  header("Location: /login");
}

$mysql->close();
