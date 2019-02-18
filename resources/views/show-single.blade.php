<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Single team</h1>

    <h2>{{ $team->name }}</h2>
    <h2>{{ $team->email }}</h2>
    <h2>{{ $team->address }}</h2>

    @foreach ($team->players as $player)
    <a href="{{ '/players/'. $player->id }}"> {{ $player->first_name }}  {{ $player->last_name }}</a><br>

    @endforeach
    
</body>
</html>