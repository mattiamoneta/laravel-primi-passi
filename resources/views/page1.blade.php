<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page1</title>
</head>
<body>
    <header>
        <ul>
            <li><a href="{{route('Homepage')}}">Home</a></li>
            <li><a href="{{route('Pagina1')}}">Pagina 1</a></li>
            <li><a href="{{route('Pagina2')}}">Pagina 2</a></li>
        </ul>
    </header>
    <main>
        <h1>{{$title}}</h1>
    </main>
</body>
</html>