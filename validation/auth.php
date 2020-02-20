<?php
$login = filter_var(trim($_POST['login']),
FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['password']),
FILTER_SANITIZE_STRING);

$pass = password_hash($pass, PASSWORD_DEFAULT);

$mysql = new mysqli('localhost','u0942603_default','2P_uY4aG','u0942603_default');
$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND 'password' = '$pass'");
$user = $result->fetch_assoc();
if (count($user) == 0) {
  echo "Ошибка! Пользователь не найден";
}
print_r($user);

exit();

$mysql->close();


 ?>
