<!DOCTYPE html>
<html lang="en">

<head>
    <script src="JavaScript.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задачки</title>
    <link rel="stylesheet" href="style.css">
    <!-- CSS only -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"> -->
</head>

<body>


    <div class="top">
        <ul>
            <li><a href="#">Глав</a></li>
            <li><a href="#">О нас</a></li>
            <li><a href="#">Адреса</a></li>
            <li><a href="#">Помощь</a></li>
        </ul>
    </div>

    <div class="register">
        <div class="vhod">Вход</div>
        <form action="auth.php" method="POST">
            <input type="email" class="input" placeholder="Логин" name="login" id="login">
            <input type="password" class="input" placeholder="Пароль" name="password" id="password">
            <div class="butt">
                <button class="voyti" type="submit">Войти</button>
        </form>
    </div>
    <p class="ZP">Забыли пароль?</p>
    <p class="ZP"><a href="../index5.php">Регистрация</a>  </p>
    </div>



   
</body>

</html>