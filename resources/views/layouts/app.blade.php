<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
</head>
<body>
    <header>
        <div class="container mb-4">
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link active" href="{{route("comics.index")}}" class="nav-link">Comic</a>
                </li>
            </ul>
        </div>
    </header>
    @yield('content')
</body>
</html>