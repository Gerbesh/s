<?php
 /**
 * Скрипт распределения ресурсов
 * Site: http://gerbesh.ru
 * Проверяем права на чтение данных,
 * только для зарегистрированных пользователей
 */

 //Проверяем зашел ли пользователь
 if($user === false){
 	echo '<div class="main"><h3>Доступ закрыт, Вы не вошли в систему!</h3></div>'."\n";
 }
 if($user === true) {
	echo '<div class="main"><h3>Поздравляю, Вы вошли в систему!</h3></div>'."\n";
    echo '<a href="/html/mainpage.html">На главную страницу</a>';
	echo '<a href="'.BEZ_HOST.'?mode=auth&exit=true">ВЫЙТИ</a>';
 }
 ?>
	