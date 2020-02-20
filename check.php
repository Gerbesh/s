<?php
$login = filter_var(trim($_POST['login']),
FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST['name']),
FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['password']),
FILTER_SANITIZE_STRING);

if(mb_strlen($login) < 5 || mb_strlen($login) > 90) {
  echo "Ошибка! Недопустимая длина логина";
  exit();
} else if(mb_strlen($pass) < 6 || mb_strlen($login) > 25) {
  echo "Ошибка! Недопустимая длина пароля (от 6 до 25 символов)";
  exit();
} else if(mb_strlen($name) < 2 || mb_strlen($login) > 25) {
  echo "Ошибка! Недопустимая длина имени";
  exit();
}

$pass = password_hash($pass, PASSWORD_DEFAULT);

$mysql = new mysqli('localhost','u0942603_default','2P_uY4aG','u0942603_default');
$mysql->set_charset('utf8');
$mysql->query("INSERT INTO `users` (`name`, `login`, `password`)
VALUES('$name', '$login', '$pass')");

$mysql->close();
header('Location: /')
 ?>
