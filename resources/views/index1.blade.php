<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <div class="container">
            <a href="{{ route("home") }}">Home</a>
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

    <form action="{{ route('form') }}" method="post">
        <div class="form-group">
            @csrf
            <label for="text">Text</label>
            <input type="text" name="text" id="text" class="form-control" placeholder="Введите текст">
            <label for="login">Login</label>
            <input type="email" name="login" id="login" class="form-control" placeholder="Введите логин">
            <label for="textA">Comment</label>
            <textarea name="textA" id="textA" class="form-control" placeholder="Comment"></textarea>
            <button type="submit" class="btn btn-success">Go</button>
        </div>
    </form>

</body>

</html>
