
<?php

// $string = "Я узнал что у меня есть огромная семья";
// $pattern = "/семьbb/";

// $result = preg_match($pattern, $string);

// var_dump($result);

//общие настройки
ini_set('display_errors', 1);
error_reporting(E_ALL);
// подключение файлов системы
define('ROOT', dirname(__FILE__));
require_once(ROOT.'/components/Router.php');
require_once(ROOT.'/components/Db.php');
// установка связи с БД


// вызов роутера
$router = new Router();
$router->run();