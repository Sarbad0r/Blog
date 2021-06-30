<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>

<body>

    @include('gir.navbar')

    <div class="row g-5">
        <div class="col-md-6">
            <h1>@yield('Opisanie')</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia et dolorem aspernatur? Vero cum odit
                officia ea non. Fuga nulla quis veniam ipsa iure atque eveniet, officiis molestias nemo quam?</p>
        </div>
        <div class="col-md-6">
            <h4>Это просто правая сторона</h4>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi rem maxime id vero dolores ab tenetur nam
                praesentium. Tenetur iure deleniti fuga ipsa cum molestias, numquam corrupti natus quia officia!</p>

        </div>
    </div>
    </div>

</body>

@include('gir.footer')

</html>
