<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HomePage</title>
</head>

<body>
    @dump($colors)
    <h1>{{ $saluto }}</h1>
    <ul>
        <li>Nome: <strong>{{ $name }}</strong></li>
        <li>Cognome: <strong>{{ $surname }}</strong></li>
        @foreach ($colors as $color)
            <li><strong>{{$color}}</strong></li>
        @endforeach

    </ul>

</body>

</html>
