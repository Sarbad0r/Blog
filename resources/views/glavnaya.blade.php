@extends('AllIshere/Structure')
@section('title')
    Главная
@endsection
@section('header')
    <style>
        body {
            background-color: #000000;
        }
        .navbar-toggler{
            background-color: #000000;
            
        }
        .container{
            background-color: #000000;
        }
        .navbar{
            background-color: #000000;
        }
        .url_dtt{
            text-decoration: none;
        }
        
        

    </style>

    <header>
        <div class="bg-black collapse" id="navbarHeader" style="">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-7 py-4">
                        <h4 class="text-white">О нас</h4>
                        <p class="text-muted">Мы студенты Технологического Университета Таджикистана решили создать сайт
                            для нашей группы. Данный сайт доступен только для студентов группы 1-40010101B.
                        <p class="text-muted">
                            Здесь вы можете посмотреть свои баллы рейтингов а также экзаменов
                        </p>
                        </p>
                    </div>
                    <div class="col-sm-4 offset-md-1 py-4">
                        <h4 class="text-white">Контакты</h4>
                        <ul class="list-unstyled">
                            <li><a href="https://www.instagram.com/se01.tj/" class="text-white">Instagram</a></li>
                            {{-- <li><a href="#" class="text-white">Facebook</a></li> --}}
                            {{-- <li><a href="#" class="text-white"></a></li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar navbar-dark shadow-sm">
            <div class="container">
                <a href="#" class="navbar-brand d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2"
                        viewBox="0 0 24 24">
                    </svg>
                    <strong></strong>
                </a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </header>


    <div class="d-flex flex-column min-vh-100 bg-black-50 pt-10 pt-md-8 pb-7 pb-md-0">
        <div class="container my-auto">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-6 text-center">

                    <!-- Preheading -->
                    <h6 class="text-xs text-white-100">
                       <a href="https://tut.tj/" class="url_dtt"> <span class="text-primary">Технологический Университет Таджикистана</span></a> /8-oй корпус
                    </h6>

                    <!-- Heading -->
                    <h1 class="display-1 text-white mb-4">
                        se01.tj
                    </h1>

                    <!-- Subheading -->
                    {{-- <p class="text-center text-white-50 mb-7">
                        Наш сайт разположен в городе Душанбе, Таджикистан --}}
                    <p class="text-center text-white-50 mb-7">Этот сайт только для студентов группы 1-40010101B</p>
                    </p>

                    <!-- Button -->
                    <a class="btn btn-outline-primary text-white text-primary-hover mb-7 mb-md-0"
                        href="{{ route('register') }}">
                        Войти в аккаунт
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection
