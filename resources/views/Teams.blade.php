<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Alll teams</h1>

    @foreach ($teams as $team)

    <h3><a href="{{ '/teams/ '. $team->id }}"> {{ $team->name }}  </a>  </h3>
        
    @endforeach

    
</body>
</html>