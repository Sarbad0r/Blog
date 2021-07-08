<?php

$login = filter_var(trim($_POST["login"]), FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST["password"]), FILTER_SANITIZE_STRING);
// $image = filter_var(trim($_POST["image"]));

$password = md5($password."qwerty");

if(mb_strlen(trim($login)) < 5 || mb_strlen(trim($login)) > 90){
    die ("Недопустимая длина логина");
}
elseif(mb_strlen(trim($password)) < 2 || mb_strlen(trim($password)) > 90){
    die ("Недопустимая длина пароля");
}

$mysql = new mysqli("localhost", "root", "", "register_mysite");
if(!$mysql){
    die("Error");
}
$mysql = $mysql->query("INSERT INTO `users` (`id`, `login`, `password`) VALUES (NULL, '$login', '$password')");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
</body>
</html>