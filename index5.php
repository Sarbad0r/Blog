<!DOCTYPE html>
<html lang="en">

<head>
    <script src="JavaScript.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задачки</title>
    <link rel="stylesheet" href="style.css">
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
        <div class="vhod">Регистрация</div>
        <form action="form.php" method="POST">
            <input type="email" class="input" placeholder="Логин" name="login" id="login">
            <input type="password" class="input" placeholder="Пароль" name="password" id="password">
            <!-- <input type="file" class="input" name="image" placeholder="Выберите фото профиля"> -->
            <div class="butt">
                <button class="voyti" type="submit">Регистрация</button>
        </form>
    </div>
    <p class="ZP">Забыли пароль?</p>
    <p class="ZP"><a href="auth/aphtoriz.php" class="a"> Уже есть аккаунт?</a></p>
    </div>


</body>

</html>