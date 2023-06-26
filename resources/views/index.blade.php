<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Boolean Movies</title>
    @vite('resources/js/app.js')
</head>
<body>

    <h1>Elenco Film</h1>
    @foreach ($movies as $movie)
        <div class="card">
            <div>
                <h4>{{$movie['original_title']}}</h4>
                <div>Nationality: {{$movie['nationality']}}</div>
                <div>Released on: {{$movie['date']}}</div>
                <div>Vote:{{$movie['vote']}}</div>

            </div>
        </div>
    @endforeach
 
</body>
</html>

