<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title> @yield('title')
    </title>
</head>

<body>

    @include('razmetka.nav')

    <div class="row mb-2">
        <div class="col-md-5">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-primary">Мир</strong>
                    <h3 class="mb-0">@yield('Opisanie')</h3>
                    <div class="mb-1 text-muted">12 Ноября</div>
                    <p class="card-text mb-auto">Это более широкая карточка с вспомогательным текстом ниже как
                        естественный ввод к дополнительному контенту.</p>
                </div>

            </div>
        </div>
        <div class="col-md-5">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-success">Дезайн</strong>
                    <h3 class="mb-0">@yield('Opisanie2')</h3>
                    <div class="mb-1 text-muted">11 Ноября</div>
                    <p class="mb-auto">Это более широкая карточка с вспомогательным текстом ниже как естественный ввод к
                        дополнительному контенту..</p>
                </div>
            </div>
        </div>
    </div>
</body>

    <footer>
        @include('razmetka.footer')
    </footer>


</html>
