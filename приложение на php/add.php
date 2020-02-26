<?php
// вставляэм даны з пост в перемену
$task = $_POST['task'];
// запрост на правельнысть ввода
if($task == ''){
    echo 'введите задание';
    exit();
} 
// подключаэм файл
require 'config.php';
// задаэм даны до я коъ подключамся 
$dsn = 'mysql:host=localhost;dbname=tasks';
// указуэм $dsn (дыни хоста), логин ,пароль
$pdo = new PDO($dsn, 'root', '');
// запрос до бд 
$sql = 'INSERT INTO taskkk(task) VALUES(:task)';
// подготовка запроса
$query = $pdo->prepare($sql);
$query->execute(['task'=> $task]);
header('location: /');





?>