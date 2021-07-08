<?php



$login = filter_var(trim($_POST["login"]), FILTER_SANITIZE_STRING);
// echo "<br>$login</br>";
$pasword = filter_var(trim($_POST["password"]), FILTER_SANITIZE_STRING);
// echo "<br>$pasword</br>";
// $image = filter_var(trim($_POST["image"]), FILTER_SANITIZE_STRING);
// echo $image;
$pasword = md5($pasword . "qwerty");

$mysql = new mysqli("localhost", "root", "", "register_mysite");
if (!$mysql) {
    die("error");
}

$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$pasword'");
$user = $result->fetch_assoc();
if (!$user) {
    echo "Такой пользователь не найден";
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"> -->
</head>

<body>
 
    
</body>

</html>