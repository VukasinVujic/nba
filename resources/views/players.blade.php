<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>all players</h1>

    
    @foreach ($players as $player)
    
    {{ $player->first_name }}
    <br>
    {{ $player->last_name }}
    <br>
    {{ $player->email }}
    @endforeach
   

        
    
</body>
</html>