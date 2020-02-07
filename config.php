<?php
 /**
 * Конфигурационный файл
 * Site: http://gerbesh.ru
 * Регистрация пользователя письмом
 */


 //Ключ защиты
 if(!defined('BEZ_KEY'))
 {
     header("HTTP/1.1 404 Not Found");
     exit(file_get_contents('./404.html'));
 }

 //Адрес базы данных
 define('BEZ_DBSERVER','localhost');

 //Логин БД
 define('BEZ_DBUSER','u0942603_default');

 //Пароль БД
 define('BEZ_DBPASSWORD','2P_uY4aG');

 //БД
 define('BEZ_DATABASE','u0942603_default');

 //Префикс БД
 define('BEZ_DBPREFIX','bez_');

 //Errors
 define('BEZ_ERROR_CONNECT','Нет соединения с БД');

 //Errors
 define('BEZ_NO_DB_SELECT','Данная БД отсутствует на сервере');

 //Адрес хоста сайта
 define('BEZ_HOST','http://'. $_SERVER['HTTP_HOST'] .'/');
 
 //Адрес почты от кого отправляем
 define('BEZ_MAIL_AUTOR','Регистрация на http://gerbesh.ru <no-reply@gerbesh.ru>');
 ?>