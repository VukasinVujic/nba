@extends('layouts.master')


@section('title')
   SINGLE TEAM
@endsection

@section('content')

<h2>{{ $team->name }}</h2>
    <h2>{{ $team->email }}</h2>
    <h2>{{ $team->address }}</h2>

    @foreach ($team->player as $player)
    <a href="{{ '/players/' . $player->id}}"> {{ $player->first_name }}  {{ $player->last_name }}</a><br>

    @endforeach
   
    

@endsection



