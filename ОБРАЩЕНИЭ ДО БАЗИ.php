<?php
$servername = "localhost"; // дани для підключення до бд 
$username = "root";
$pass = "";
$dbname = "mebase";
// указуєм через общу перемену $link підключення до бази
// mysqli_connect($servername, $username, $pass, $dbname); яка зєднує через перемені до бази
$link = mysqli_connect($servername, $username, $pass, $dbname);
//
// mysqli_query($link, "SET NAMES 'utf8'") указуэм тип кодыровки
mysqli_query($link, "SET NAMES 'utf8'");
//
// запрос ("SELECT * FROM `users`")ставиться через переменну
$query = "SELECT * FROM `users`";
//
//перевірка підключення через or die
$result = mysqli_query($link, $query) or die (mysqli_error($link));
//
//цикл який виконується -- $user = mysqli_fetch_assoc($result)-- 
//mysqli_fetch_assoc - Возвращает ассоциативный массив с названиями индексов, соответсвующими названиям колонок или FALSE если рядов больше нет
while ($user = mysqli_fetch_assoc($result)){
    //
    //виводить через масив 
    print("login: " . $user['login'] . "..... Идентификатор: . " . $user['id'] ."..... врем рег: . " . $user['reg_date'] . "<br>");
    //
}
 
// Эта функция возвращает структурированную информацию об одном или более выражений, которая включает его тип и значение.Массивы обрабатываются рекурсивно со значениями, предназначенными для показа структуры.
 var_dump($result);
//
//запрос на добавлення позиції в базі (таблиці)
$query = "INSERT INTO `users` (`id`, `login`, `pass`, `reg_date`)
  VALUES (NULL, 'xzxzxzx', MD5('zxccv'), UNIX_TIMESTAMP())";
//

 


// var_dump($result);
// $user = mysqli_fetch_assoc($result);
// var_dump($user);
// $query = "INSERT INTO `users` (`id`, `login`, `pass`, `reg_date`)
//  VALUES (NULL, 'xzxzxzx', MD5('zxccv'), UNIX_TIMESTAMP())";



?>