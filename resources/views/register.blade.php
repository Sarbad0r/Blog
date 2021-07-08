<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Регестрация</title>
</head>
 @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<body class="text-center">
   
    <main class="form-signin">
        <form action="{{ route('form') }}" method="POST">

            <h1 class="h3 mb-3 fw-normal">Пожалуйста региструйтесь</h1>
            @csrf
            <div class="form-floating">

                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="login">
                <label for="floatingInput">Введите логин</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Введите пароль"
                    name="password">
                <label for="floatingPassword">Введите пароль</label>
            </div>
            <div class="form-floating">
                <textarea name="textA" class="form-control" id="floatingTextA" placeholder="Введите текст"></textarea>
                <label for="floatingPTextA">Введите текст</label>
            </div>

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Запомнить меня
                </label>
            </div>
            <button class="btn btn-success" type="submit">Регестрация</button>
            <p class="mt-5 mb-3 text-muted">© 2017–2021</p>
        </form>
    </main>

</body>

</html>
