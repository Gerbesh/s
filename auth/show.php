<?php
 /**
 * Скрипт распределения ресурсов
 * Site: http://gerbesh.ru
 * Проверяем права на чтение данных,
 * только для зарегистрированных пользователей
 */

 //Проверяем зашел ли пользователь
 if($user === false){
 	echo '<h3>Доступ закрыт, Вы не вошли в систему!</h3>'."\n";
 }
 if($user === true) {
	echo '<h3>Поздравляю, Вы вошли в систему!</h3>'."\n";
	echo '<a href="'.HOST.'?mode=auth&exit=true">ВЫЙТИ</a>';
 }
 ?>
	