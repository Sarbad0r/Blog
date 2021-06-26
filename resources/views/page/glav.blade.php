<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- CSS only -->
    {{-- <link rel="stylesheet" href="css/app.css"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    @include('page.header')

    <div class="container">
        <div class="row">
            <div class="col-8">
                @yield('Opisanie')
                о есть, не просто рассказать о себе, а ввести в статью какой-то ключевой запрос, который будет приводить
                клиентов. В итоге мы рассказываем о себе и органично вплетаем в материал бонусные запросы.

                Давайте попробуем рассмотреть такой формат на примере подобранного запроса “заказать пиццу“.

                Как можно органично вплести его в текст? Итак:

                Заказывайте пиццу в N, потому что мы … (рассказываем о компании) ;
                Мы хотели, чтобы заказчики пиццы получали у нас … (рассказываем о наших преимуществах) ;
                Самое время заказать пиццу в N, потому что …. Здесь и вовсе можно ввести несколько пунктов, каждый из
                которых будет начинаться с ключа “самое время заказать пиццу в N, потому что (первая причина, вторая и
                так далее) ;
                Есть лишь два нюанса при создании таких текстов:

                Нюанс первый. Ключи должны быть точно к месту, не нужно вставлять их криво по принципу “Пицца Москва
                заказать хотите?”, иначе вы превратите презентацию компании в SEO-спам, что очень не по нраву читателю.

                Нюанс второй. Ключи здесь вторичны. То есть, если у вас нет крутого копирайтера, который чувствует текст
                и чувствует “ключевую органику” в материале, лучше поставьте минимум ключей. Лучше уж понадейтесь на
                “авось, зайдет в ТОП и так”. Бывает частенько, что и заходит.
            </div>
            <div class="col-4">
            @show
            <h4>Это просто левая сторона</h4>
            <p>Это левая сторона</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui doloremque minima accusamus debitis
                quis illo maxime neque nisi perspiciatis sunt, ad ipsum quibusdam esse expedita mollitia iste,
                quaerat earum harum!</p>
        </div>
    </div>
</div>


@include('page.footer')




</body>

</html>
