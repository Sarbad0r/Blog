<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" />
    <title>Вход</title>
</head>
<style>
    body {
        background-color: black;
    }

    .glav {
        float: right;
        margin: 0 15px 0 0;
        color: white;
        text-decoration: none;
        font-family: 'Times New Roman', Times, serif;
    }

</style>

<body data-ls="1" data-script-loaded="1" data-sl="1">




    <a href="{{ route('Login') }}" class="glav">В главную</a>
    <div class="min-vh-100 d-flex align-items-center ">
        <div class="container">
            <div class="row">
                <div class="offset-lg-3 col-lg-6 col-12">


                    <div class=" p-4 p-lg-8 rounded-lg">
                        <form action="{{ route('Login') }}" method="POST">
                            {{-- @method('put'); --}}
                            @csrf
                            <h1 class="mb-2 text-white">Добро пожаловать</h1>
                            <p class="mb-4 text-white">Пожалуйста регистрируйтесь</p>

                            <div class="form-group">
                                <label for="name" class="text-white">Имя </label>
                                <input type="text" id="name" class="form-control border-0" placeholder="Введите имя"
                                    required="" name="name">
                            </div>

                            <div class="form-group">
                                <label for="email" class="text-white">Эл.почта </label>
                                <input type="email" id="email" class="form-control border-0" placeholder="Email address"
                                    required="" name="email">
                            </div>
                            <div class="form-group mb-4">
                                <label for="password" class="text-white">Пароль</label>
                                <input type="password" id="password" class="form-control border-0"
                                    placeholder="Password" required="" name="password">
                            </div>
                            <div class="form-group mb-4">
                                <label for="birthday" class="text-white">День рождение</label>
                                <input type="date" id="birthday" class="form-control border-0"
                                    placeholder="День рождение" required="" name="birthday">
                            </div>
                            <div class="form-group mb-4">
                                <label for="about" class="text-white">Расскажите о себе</label>
                                <textarea name="ABOUT" id="about" class="form-control"
                                    placeholder="Напишите что нибудь"></textarea>
                            </div>

                            <button class="btn btn-primary btn-block" type="submit">
                                Регистрация
                            </button>
                            <p>
                                <a href="{{ route('register') }}" class="glav">Уже есть аккаунт?</a>
                            </p>
                            {{-- <div class="d-lg-flex justify-content-between mt-4 mb-3 ">
                                <p class="text-muted font-14">
                                    Don't have an account yet? <a href="signup.html">Sign up</a>
                                </p>
                                <p class="font-14">
                                    <a href="password-reset.html">Forget Password</a>
                                </p> --}}
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</body>

</html>
